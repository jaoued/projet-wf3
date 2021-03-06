<?php

namespace Controller\User;

use Controller\ControllerAbstract;
use Entity\Chronique;
use Entity\Category;


class ChroniqueController extends ControllerAbstract {
    
    
    public function editAction($id = null)
    {
         // pour construire la liste déroulante des rubriques
        $categories = $this->app['category.repository']->findAll();
        
        if (is_null($id)) {
            $chronique = new Chronique();
            //$chronique
                //->setCategory(new Category())
                //->setAuthor($this->app['user.manager']->getUser())
            //;
        } else {
            $chronique = $this->app['chronique.repository']->find($id);
            
            if (is_null($chronique)) {
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if (!empty($_POST)) {
            
            $this->sanitizePost();
            
            $user = $this->app['user.manager']->getUser();
            
            $type="";
            
            if($user->getRole() == "user"){
                $type = "user_chronique";
            }else{
                $type = "asso_chronique";
            }
            
            $chronique
                ->setPost_title($_POST['post_title'])
                ->setPost_type('chronique')
                ->setPost_date($_POST['post_date'])
                ->setType($_POST['type'])
                ->setUrl_img_1($_POST['url_img_1'])
                ->setParagraph_1($_POST['paragraph_1'])
                ->setParagraph_2($_POST['paragraph_2'])
                ->setMember_id_member($user->getId_member())
                ->setCategory_id_category($_POST['category'])
            ;
            
            //$chronique->getCategory()->setId($_POST['category']);
            
            // contrôle des champs de formulaire
            if (empty($_POST['post_title'])) {
                $errors['post_title'] = 'Le titre est obligatoire';
            } elseif (strlen($_POST['post_title']) > 100) {
                $errors['title'] = 'Le titre ne doit pas dépasser 100 caractères';
            }
            
            if (empty($_POST['paragraph_1'])) {
                $errors['paragraph_1'] = 'Il faut du contenu au moins dans le premier paragraphe';
            }
            
            if (empty($_POST['category'])) {
                $errors['category'] = 'La category est obligatoire';
            }
            
            if (empty($errors)) {
                $this->app['chronique.repository']->save($chronique);
                //$this->addFlashMessage("La chronique est enregistré");
                
                return $this->redirectRoute('user_chronique_list');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                //$this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
            'user/chronique/edit.html.twig',
            [
                'chronique' => $chronique,
                'categories' => $categories
            ]
        );
        
    }
    
    public function deleteAction($id)
    {
        $chronique = $this->app['chronique.repository']->find($id);
        
        if (is_null($chronique)) {
            $this->app->abort(404);
        }
        
        $this->app['chronique.repository']->delete($chronique);
        $this->addFlashMessage("La chronique est supprimée");
        
        return $this->redirectRoute('user_chronique_list');
    }
    
    public function listUserChronique(){
        $user = $this->app['user.manager']->getUser();
        
        $chroniques = $this->app['chronique.repository']->listByUserId($user->getId_member());
        
        return $this->render('user/chronique/list.html.twig',
                [
                    'chroniques' => $chroniques
                ]
        );
    }
}

?>