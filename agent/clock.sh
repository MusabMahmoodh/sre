#!/bin/bash

DB_HOST="mysql.canopuz.com"
DB_USER="cano_core"
DB_PWD="Canopus#PvtLtd2021"
DB_NAME="cano_core"


TIME_START=`date +'%s'`
TIME_SHIFT=10

FORCAST_END=$(($TIME_START + $TIME_SHIFT))
MARKER_TIME=`cat clock_mark.txt`

if (( TIME_START < MARKER_TIME)); then
   exit
fi

echo $FORCAST_END > clock_mark.txt


for (( c=1; c<=49; c++ ))
do

sleep 1

mysql -h $DB_HOST -u $DB_USER -p$DB_PWD -D $DB_NAME <<EOF

SET time_zone = '+00:00';
SET @clock_increment := 5;

UPDATE ven_clock AS c
       LEFT JOIN ven_work_group AS wg
              ON c.work_group = wg.id
       LEFT JOIN ven_working_hours AS wh
              ON c.work_group = wh.work_group
                 AND Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%w') = wh.week_number
                 AND CAST(Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%H:%i:%s') AS CHAR CHARACTER SET latin1) >= wh.start_time
                 AND CAST(Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%H:%i:%s') AS CHAR CHARACTER SET latin1) <= wh.end_time
       LEFT JOIN ven_holidays AS h 
              ON c.work_group = h.work_group 
                 AND Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%Y-%m-%d') = h.date_of_holiday
                 AND CAST(Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%H:%i:%s') AS CHAR CHARACTER SET latin1) >= h.start_time
                 AND CAST(Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%H:%i:%s') AS CHAR CHARACTER SET latin1) <= h.end_time 
       SET c.elapse_time_sec = c.elapse_time_sec + @clock_increment, c.updated_on = c.updated_on + @clock_increment 
WHERE  c.status = 1 AND h.id IS NULL AND wh.id IS NOT NULL AND (c.updated_on + @clock_increment) <= UNIX_TIMESTAMP();

UPDATE ven_clock AS c
       LEFT JOIN ven_work_group AS wg
              ON c.work_group = wg.id
       LEFT JOIN ven_working_hours AS wh
              ON c.work_group = wh.work_group
                 AND Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%w') = wh.week_number
                 AND CAST(Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%H:%i:%s') AS CHAR CHARACTER SET latin1) >= wh.start_time
                 AND CAST(Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%H:%i:%s') AS CHAR CHARACTER SET latin1) <= wh.end_time
       LEFT JOIN ven_holidays AS h 
              ON c.work_group = h.work_group 
                 AND Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%Y-%m-%d') = h.date_of_holiday
                 AND CAST(Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%H:%i:%s') AS CHAR CHARACTER SET latin1) >= h.start_time
                 AND CAST(Date_format(Convert_tz(Date_format(From_unixtime(c.updated_on + @clock_increment),'%Y-%m-%d %H:%i:%s'),'+00:00', wg.time_zone), '%H:%i:%s') AS CHAR CHARACTER SET latin1) <= h.end_time 
       SET c.updated_on = c.updated_on + @clock_increment 
WHERE  c.status < 3 AND (h.id IS NOT NULL OR wh.id IS NULL) AND (c.updated_on + @clock_increment) <= UNIX_TIMESTAMP();

EOF


TIME_START=`date +'%s'`
FORCAST_END=$(($TIME_START + $TIME_SHIFT))
echo $FORCAST_END > clock_mark.txt

done
