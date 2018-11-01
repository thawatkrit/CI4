<?php namespace App\Controllers;

use App\Models\NewsModel;

class News extends \CodeIgniter\Controller
{
        public function index()
        {
                $data = [
                'news'  => $model->getNews(),
                'title' => 'News archive',
        ];
        echo view('news/index', $data);   
        }

        public function view($slug = NULL)
{
        $model = new NewsModel();

        $data['news'] = $model->getNews($slug);

        if (empty($data['news']))
        {
                throw new \CodeIgniter\PageNotFoundException('Cannot find the page: '. $slug);
        }

        $data['title'] = $data['news']['title'];

      
        echo view('news/view', $data);
    
}
}