<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // Main Page Home
    public function index() {

        $site = $this->mConfig->list_config();
        $sliderhome = $this->mGalleries->listGalleriesPubHome();
        $menus = $this->mMenus->listMenus();
        $prog = $this->mBlogs->listPBSPub();
        $allprog = $this->mBlogs->listAllDonasiPub();
        
//        $blogs = $this->mBlogs->listBlogsPub();
//        $products = $this->mProducts->listProductsPub();
//        $clients = $this->mClients->listClients();
//        $obusines = $this->mBlogs->listOurBusinessPub();
//        $subsidiaries = $this->mBlogs->listSubsidiariesPub();
//        $project = $subs = $this->mBlogs->listProjectPub();

        $data = array('title' => 'Home - ' . $site['nameweb'],
            'site' => $site,
            'sliderhome' => $sliderhome,
            'menus' => $menus,
            'prog' => $prog,
            'allprog' => $allprog,
//            'blogs' => $blogs,
//            'products' => $products,
//            'clients' => $clients,
//            'obusines' => $obusines,
//            'subsidiaries' => $subsidiaries,
//            'project' => $project,
            'isi' => 'front/'.$site['theme'].'/home/list');
        $this->load->view('front/'.$site['theme'].'/layout/wrapper', $data);
    }

}
