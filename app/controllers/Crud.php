<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Crud extends Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->call->model('Crud_model');
    }

    public function add()
    {
        $room_name = $this->io->post('room_name');
        $price = $this->io->post('price');
        $size = $this->io->post('size');
        $capacity = $this->io->post('capacity');
        $services = $this->io->post('services');
        $status = $this->io->post('status');
        $image_url = $this->io->post('image_url');

        
        
        $this->Crud_model->add( $room_name, $price, $size, $capacity, $services, $status, $image_url );
        $data = $this->Crud_model->read();



        return redirect('all_rooms');
    }
     //add book

 public function addbook()
 {
    $roomName = $this->io->post('roomName');
     $checkInDate = $this->io->post('checkInDate');
     $checkOutDate = $this->io->post('checkOutDate');
     $specialRequests = $this->io->post('specialRequests');
     $adults = $this->io->post('adults');
     $children = $this->io->post('children');
     $name = $this->io->post('name');
     $email = $this->io->post('email');
     $phone = $this->io->post('phone');
     $address = $this->io->post('address');
    //  $termsCheck = $this->io->post('termsCheck');, $termsCheck

     
     
     $this->Crud_model->addbook( $roomName, $checkInDate, $checkOutDate, $specialRequests, $adults, $children, $name, $email, $phone, $address);
     $data = $this->Crud_model->readbook();



     return redirect('rooms');
 }

    public function delete($id)
    {
    $this->Crud_model->delete($id);

    return redirect('all_rooms');
    }
    public function read(){
        $data = $this->Crud_model->read();
        $this->call->view('all_rooms', $data);
    }
     //booking
 public function readbook(){
    $data = $this->Crud_model->readbook();
    $this->call->view('book_request', $data);
}
    public function all_rooms(){
        $data = $this->Crud_model->read();
		$this->call->view('admin/all_rooms', $data);
	}

   
  

 
    public function edit($id)
    {
        $data = $this->Crud_model->rooms_data($id);
    
        $this->call->view('admin/edit', $data);
        
    }

    public function editstat($id)
    {
        $data = $this->Crud_model->status_data($id);
    
        $this->call->view('admin/book_request', $data);
        
    }

    

    public function update(){
        $id=$this->io->post('id');
        $room_name = $this->io->post('room_name');
        $price = $this->io->post('price');
        $size = $this->io->post('size');
        $capacity = $this->io->post('capacity');
        $services = $this->io->post('services');
        $status = $this->io->post('status');
        $image_url = $this->io->post('image_url');
        
        $this->Crud_model->edit($id, $room_name, $price, $size, $capacity, $services, $status, $image_url );
        redirect('/all_rooms');
    }

    public function updatestat($id)
    {
        $status = $this->io->post('status');

        $status = $this->io->post('status');
        $roomName = $this->io->post('roomName');
        $checkInDate = $this->io->post('checkInDate');
        $checkOutDate = $this->io->post('checkOutDate');
        $specialRequests = $this->io->post('specialRequests');
        $adults = $this->io->post('adults');
        $children = $this->io->post('children');
        $name = $this->io->post('name');
        $email = $this->io->post('email');
        $phone = $this->io->post('phone');
        $address = $this->io->post('address');
    
        $this->Crud_model->editstat($id, $status, $roomName, $checkInDate, $checkOutDate, $specialRequests, $adults, $children, $name, $email, $phone, $address);
        redirect('/book_request');
    }



public function book_request(){
    $data = $this->Crud_model->readbook();
    $this->call->view('admin/book_request', $data);
}

// public function editstatus(){
//     $this->call->view('admin/editstatus');
// }


}
