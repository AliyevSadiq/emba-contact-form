<?php


namespace Emba\ContactForm\Models;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactForm
 * @package Emba\ContactForm\Models
 * @mixin Builder
 */
class ContactForm extends Model
{
    protected $guarded = [];
    protected $table = 'contact';
}
