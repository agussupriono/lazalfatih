<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // Main Page Home
    public function index() {

        $site = $this->mConfig->list_config();
        $galleries = $this->mGalleries->listGalleriesPubHome();
//        $blogs = $this->mBlogs->listBlogsPub();
        $products = $this->mProducts->listProductsPub();
        $clients = $this->mClients->listClients();
        $menus = $this->mMenus->listMenus();
        $obusines = $this->mBlogs->listOurBusinessPub();
        $subsidiaries = $this->mBlogs->listSubsidiariesPub();
        $project = $subs = $this->mBlogs->listProjectPub();

        $data = array('title' => 'Home - ' . $site['nameweb'],
            'site' => $site,
            'galleries' => $galleries,
//            'blogs' => $blogs,
            'products' => $products,
            'clients' => $clients,
            'menus' => $menus,
            'obusines' => $obusines,
            'subsidiaries' => $subsidiaries,
            'project' => $project,
            'isi' => 'front/'.$site['theme'].'/home/list');
        $this->load->view('front/'.$site['theme'].'/layout/wrapper', $data);
    }

}
