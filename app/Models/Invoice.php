<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function section(){
        return $this->belongsTo(Sections::class);
    }
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public  function details(){
        return $this->hasMany(InvoicesDetails::class, 'invoices_id');
    }

    public  function attachments(){
        return $this->hasMany(InvoicesAttachment::class, 'invoice_id');
    }
}
