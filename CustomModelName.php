defined('BASEPATH') OR exit('No direct script access allowed');

class CustomModelName extends CI_Model {
		
	public function __construct() {
		$this->load->database(); 
	}
  
  public function customfunctions($parameter1,$parameter2){
		$this->db->select('*');
		$this->db->from('tablename');
		$this->db->where('parameter2',$password);//checking parameter 2 is valid or not
		$this->db->where("(name='".$parameter1."' OR email='".$parameter1."')");//checking multiple parameter with OR Command.

		$query = $this->db->get();
		if($query->num_rows() == 0)
			return 'mismatch';
		else

	return $query->result_array();
	//return $this->db->last_query(); used to get last executed mysql query. 
	}
  }
