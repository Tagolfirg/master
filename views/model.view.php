<?php 
require_once('classes/view.php');
require_once('classes/backpack.php');

class model_view extends view
{
	public function prepare()
	{
		global $schema;
		
		$this->template="model";
		$this->tab="item";
		$this->title = 'Nope.mdl';
		
		$b = new backpack(false);
		$defindex = $this->request[1];
		$si = $schema['items'][$defindex];
		$model = $si['model_player'];
		
		$m_bits = explode('.',$model);
		$bits2 = explode('/',$model);
		$mname = $bits2[count($bits2)-1];
		$this->title = $mname;
		
		$this->params['model_id'] = $m_bits[0];
	}
}

?>