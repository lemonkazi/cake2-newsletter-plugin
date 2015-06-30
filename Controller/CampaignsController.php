 <?php
/**
 *
 * Roadbees Email Controller
 *
 *
 * @copyright Copyright (c) 2011, Haithem Bel Haj
 * @author Haithem Bel Haj <haythem.belhaj@googlemail.com>
 * @link          http://roadbees.de
 * @since         Roadbees v 0.1
 */
// App::uses('AppController','Controller');
// class NewsletterAppController extends AppController {
        
//         public $components = array('Auth');
//         public $helpers = array('Time');
        
// }

class CampaignsController extends NewsletterAppController {

	/**
	 *
	 */
	public $name = "Campaigns";
	var $layout = 'admin';
	
	/**
	 *
	 */
//	public $helpers = array('Markitup.Markitup');
	
	
	/**
	 *
	 * before filter
	 *
	 * @access public
	 */
	public function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('*');	
	}
	
	/**
	 *
	 *
	 */
	public function manager_index() {
		$campaigns = $this->Campaign->find('all');
		$this->set(compact('campaigns'));
	}
	
	/**
	 *
	 *
	 */
	public function manager_edit($campaignid = null) {
		
		if(is_null($campaignid)) {
			$this->Session->setFlash("campaign ID is missing");
			$this->redirect(array('manager' => true, 'controller' => "campaigns", "action" => "manager_index"));
		}
		
		//$this->Campaign->Behaviors->attach('Mongodb.SqlCompatible');
		$this->Campaign->id = $campaignid;		
		
		if($this->request->is('get')) {
			$this->request->data = $this->Campaign->read();
		}else{
			$this->Campaign->set($this->data);
			if($this->Campaign->save()) {
				$this->Session->setFlash("campaign saved");
				$this->redirect(array('manager' => true, 'controller' => "campaigns", "action" => "manager_index"));
			} else {			
				$this->Session->setFlash("Campaign could not be saved");			
			}
		}
	}
	
	/**
	 *
	 *
	 */
	public function manager_add() {
		
		//VALIDATION RULE ISUNIQUE DOES NOT WORk!!
		
		if($this->request->is('post') && !empty($this->data)) {			
			$this->Campaign->create();						
			if($this->Campaign->save($this->data)) {
				$this->Session->setFlash("campaign created");
				$this->redirect(array('manager' => true,'plugin' => 'newsletter', 'controller' => "campaigns", "action" => "manager_index"));
			} else {			
				$this->Session->setFlash("Campaign could not be created");
				$this->render();
			}
		}
	}
	
	/**
	 *
	 *
	 */
	public function manager_view($campaignid = null) {
		
		if(is_null($campaignid)) {
			$this->Session->setFlash("campaign ID is missing");
			$this->redirect(array('manager' => true, 'controller' => "campaigns", "action" => "manager_index"));
		}
		$this->Campaign->id = $campaignid;
		$campaign = $this->Campaign->read();
		$this->set(compact('campaign'));
	}
	
	/**
	 *
	 *
	 */
	public function manager_delete($campaignid = null) {
		if(!is_null($campaignid)) {
			if($this->Campaign->delete($campaignid)) {
				$this->Session->setFlash("campaign deleted ");
				$this->redirect(array('manager' => true, 'controller' => "campaigns", "action" => "manager_index"));	
			}
		} else {
			$this->Session->setFlash("campaign ID is missing");
			$this->redirect(array('manager' => true, 'controller' => "campaigns", "action" => "manager_index"));
		}
	}
}
