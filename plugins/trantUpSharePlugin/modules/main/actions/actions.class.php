<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of actions
 *
 * @author gregol
 */
class mainActions extends sfActions {
    
    public function executeAdd(sfWebRequest $request)
    {
        $this->form = new FilesToShareForm();
    }
    
    public function executeIndex(sfWebRequest $request)
    {
        $userId = $this->getUser()->getGuardUser()->getId();
        $this->files = EmailsToSendTable::getFilesByUserId($userId);
        
    }
    
    public function executeShare(sfWebRequest $request){
        
        $parameters = ($request->getParameterHolder()->getAll());
        $files      = $request->getFiles();
        
        $targetPath = sfConfig::get("sf_upload_dir")."/";
        $target_file = $targetPath . basename($files['files_to_share']['file_name_ob']["name"]);
        
        $imageFileType = pathinfo($target_file,4);
        $targetFile = $targetPath . '_' . uniqid().".".$imageFileType;
        
        $this->form = new FilesToShareForm();
                
                
        $this->form->bind($request->getParameter('files_to_share'), $request->getFiles('files_to_share'));
        if ($this->form->isValid())
        {
          if(move_uploaded_file($files['files_to_share']['file_name_ob']['tmp_name'], $targetFile)){
            
              $this->form->save();
              $this->redirect("homepage");
          }
        }
        
        $this->setTemplate("add");
    }
}
