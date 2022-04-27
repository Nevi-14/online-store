<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class globalSettings extends Model
{
use HasFactory, Notifiable;

public $logo;
public $company_name;
public $company_email;
public $company_phone;
public $company_country;
public $company_address;
public $company_city;
public $company_about;
public $company_terms;
 public function __construct($logo ="", $company_name ="",$company_email="",$company_phone="", $company_country="",$company_address="",$company_city="",$company_about="" , $company_terms ="")
    {   
   $this->logo = $logo;
   $this->company_name = $company_name;
   $this->company_email = $company_email;
   $this->company_phone = $company_phone;
   $this->company_country = $company_country;
   $this->company_address = $company_address;
   $this->company_city = $company_city;
   $this->company_about = $company_about;
   $this->company_terms = $company_terms;
    }

 

}

