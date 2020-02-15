<?php
namespace Step\Model;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Todos extends Eloquent
{
    public $timestamps = false;
    protected $fillable = ['todo','category','description'];
}