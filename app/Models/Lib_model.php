<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* * *****************************************************************************
 * Title           Survey
 *
 * @package        Canopus
 * Location        application/models/
 *
 * @author         Sugunan - <<zugunan[at]gmail[dot]com>>
 * @copyright      Canopus
 *
 * created on      31-07-2020, 09:37AM by Sugunan
 * updated on
 *
 * Description:    Survey related functionalities
 * *****************************************************************************
 */

class Lib_model extends CI_Model
{

    /**
     * __construct
     *
     * @param none
     * @access public
     * @return void
     * @author Sugunan - zugunan@gmail.com
     **/
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->db->query("set time_zone = '+5:30'");
    }

    /**
     * db_chk
     *
     * @param void
     * @access public
     * @return array
     * @author Sugunan - zugunan@gmail.com
     **/
    public function db_chk()
    {        
        $sql = "SELECT * FROM `wp_users`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function __destruct(){
        $this->db->close();
    }
    
}
