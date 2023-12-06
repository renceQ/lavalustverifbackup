<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Crud_model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }
    public function add($room_name, $price, $size, $capacity, $services, $status, $image_url)
    {
        $data = array(
            'room_name' => $room_name,
            'price' => $price,
            'size' => $size,
            'capacity' => $capacity,
            'services' => $services,
            'status' => $status,
            'image_url' => $image_url,
        );
        return $this->db->table('rooms')
            ->insert($data);


    }
    // $termsCheck
    public function addbook($roomName, $checkInDate, $checkOutDate, $specialRequests, $adults, $children, $name, $email, $phone, $address)
    {
        $data = array(
            
            'roomName' => $roomName,
            'checkInDate' => $checkInDate,
            'checkOutDate' => $checkOutDate,
            'specialRequests' => $specialRequests,
            'adults' => $adults,
            'children' => $children,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            // 'termsCheck' => $termsCheck,
        );
        return $this->db->table('booking')
            ->insert($data);


    }
    public function read()
    {
        return $this->db->table('rooms')->get_all();
    }
    //booking
    public function readbook()
    {
        return $this->db->table('booking')->get_all();
    }
    
    public function rooms_data($id){
        return $this->db->table('rooms')->where(array('id' => $id))->get();
        // $category = $this->db->table('rooms')->where(array('id' => $id))->get('category');
    }

    public function status_data($id){
        return $this->db->table('booking')->where(array('id' => $id))->get();
        // $category = $this->db->table('rooms')->where(array('id' => $id))->get('category');
    }




    public function delete($id)
    {
        $this->db->table('rooms')->where(array('id' => $id))->delete();
    }
    

public function edit($id, $room_name, $price, $size, $capacity, $services, $status, $image_url)
{
   
    $data = array(
        'room_name' => $room_name,
        'price' => $price,
        'size' => $size,
        'capacity' => $capacity,
        'services' => $services,
        'status' => $status,
        'image_url' => $image_url,
    );
    $result = $this->db->table('rooms')->where('id' , $id)->update($data);
    if ($result)
        return true;
}


public function editstat($id, $status, $roomName, $checkInDate, $checkOutDate, $specialRequests, $adults, $children, $name, $email, $phone, $address)
{
    $data = array(     
        'status' => $status,
        'roomName' => $roomName,
        'checkInDate' => $checkInDate,
        'checkOutDate' => $checkOutDate,
        'specialRequests' => $specialRequests,
        'adults' => $adults,
        'children' => $children,
        'name' => $name,
        'email' =>  $email,
        'phone' =>  $phone,
        'address' => $address,
    );
    $result = $this->db->table('booking')->where('id', $id)->update($data);
    if ($result)
        return true;
}



}
