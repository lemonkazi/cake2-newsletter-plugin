 <?php
/**
 *
 * Roadbees subscriber Controller
 *
 *
 * @copyright Copyright (c) 2011, Haithem Bel Haj
 * @author Haithem Bel Haj <haythem.belhaj@googlemail.com>
 * @link          http://roadbees.de
 * @since         Roadbees v 0.1
 */

class SubscribersController extends NewsletterAppController {

	public $name = 'Subscribers';

	var $uses = array('Newsletter.Subscriber','Newsletter.Campaign');
	var $layout = 'admin';

	/**
	 *
	 * subscribe to newsletter
	 *
	 * @public
	 */

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow();
	}
	
	public function subscribe(){
		
		if($this->request->is('post') === true & !empty($this->data)){
			$data = $this->request->data;
			//$this->Subscriber->Behaviors->attach('Mongodb.SqlCompatible');
			$data['Subscriber']['email'] = str_replace(" ", "", $this->data['Subscriber']['email']);

			if($this->Subscriber->save($data)){
				if($this->request->is('ajax')){
					$this->render(ajax_success);
				}else{					
					$this->render('subscribesuccess');
					return;
				}
			} else {
				if($this->request->is('ajax')){
					$this->render(ajax_failed);
				} else {			
					$this->Session->setFlash("Email could not warden created");
					$this->render('subscribefailed');
					return;
				}
			}		
		}
	}
	
	/**
	 *
	 * unsubscribe to newsletter the website way
	 *
	 * @public
	 */
	
	public function unsubscribe(){
		
		if($this->data) {
			$subscriber = $this->Subscriber->find('first',array('conditions' => array('Subscriber.email' => $this->data['email'])));
         
			if($subscriber){
				if($this->Subscriber->delete($subscriber['Subscriber']['_id'])) {					
					$this->render('unsubscribesuccess');
					return;					
				} else {
					$this->render('unsubscribefailed');
					return;
				}        
			} else {
				$this->Session->setFlash(__d('email','Die Email wurde nicht gefunden',false));
            $this->render('unsubscribefailed');
				return;
			}
		}
	}
	

	/* MANAGER FUNCTIONS */
        


	/**
	* manager_subscriber_index
	*
	*/

	public function manager_index() {
		
		$subscribers = $this->Subscriber->find('all');
		$this->set('subscribers' , $subscribers);
	}

	/**
	* manager_subscriber_view
	*
	*/

	public function manager_view($id = null) {
		
		$this->Subscriber->id = $id;
		$this->set('subscriber', $this->Subscriber->read());
	}


	/**
	* manager_subscriber_edit
	*
	*/
	
	public function manager_edit($id = null) {
		
		$this->Subscriber->id = $id;
		
		if ($this->request->is('get')) {
			$this->set('campaigns', $this->Campaign->find('all',array('fields' => 'name')));
			$this->request->data = $this->Subscriber->read();
			
		 } else {
		 	// pr($this->request->data);
		 	// exit();
		 	$data = $this->request->data;
		 	$data['Subscriber']['campaigns']=json_encode($data['Subscriber']['campaigns']);
		 	
			if ($this->Subscriber->save($data)) {
	
				
				$this->Session->setFlash("Subscriber angelegt");
				$this->redirect(array('manager' => true, 'controller' => "subscribers", "action" => "manager_index"));
			} else {
				$this->Session->setFlash("Subscriber konnte nicht angelegt werden");
				$this->render();
			}
		}		
		
	}
}
