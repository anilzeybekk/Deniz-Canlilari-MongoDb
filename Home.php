<?php

namespace App\Controllers;
use MongoDB;
class Home extends BaseController
{
    protected $helpers = ['form'];
    
    public function test()
    {
        
         
        $name = isset($_POST['name']) ? trim($_POST['name']) : null;
        $email = isset($_POST['email']) ? trim($_POST['email']) : null;
        $comment = isset($_POST['comment']) ? trim($_POST['comment']) : null;

            
            if (!empty($name) && !empty($email) && !empty($comment)) {
                try {
                    
                    $client = new MongoDB\Client("mongodb://localhost:27017/");
                    $database = $client->deneme; 
                    $collection = $database->comments; 

                    
                    $result = $collection->insertOne([
                        'name' => $name,
                        'email' => $email,
                        'comment' => $comment,
                        'created_at' => new \MongoDB\BSON\UTCDateTime()
                    ]);

                    
                    if ($result->getInsertedCount() === 1) {
                        $message = "Belge başarıyla eklendi. ID: " . $result->getInsertedId();
                    } else {
                        $message = "Belge eklenirken bir hata oluştu.";
                    }
                } catch (\Exception $e) {
                    $message = "Bir hata oluştu: " . $e->getMessage();
                }
            } else {
                $message = "Lütfen tüm alanları doldurun.";
            }

            
            return view('sayfalar/mongo', ['message' => $message]);
       

        
        return view('sayfalar/mongo');
    }
}
