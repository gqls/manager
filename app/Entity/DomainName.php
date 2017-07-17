<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DomainName extends Model
{

    protected $dates = ['last_bought_date', 'last_sold_date'];

    public function addDetails($details)
    {
        foreach ($details as $key => $detail)
        {
            $this->{$key} = $detail[$key];
        }
    }

    public function getDetails()
    {
        $domains = $this->whereNotNull('sold')
            ->orWhere('sold', '=', 0)
            ->orderBy('extension', 'desc')
            ->orderBy('name', 'asc')
            ->paginate(config('domainNames.domains_per_page'));

        $domains = !empty($domains) ? $domains : [];
        return $domains;

    }

    public function create(Request $request)
    {
        $this->name = 'jyar.com';
        $this->extension = '.com';
        $this->bought_date = null;
        $this->sold_date = Carbon::now()->toDateTimeString();
        $this->venue = 'namepros';
        $this->payment_method = 'paypal';
        $this->price = '425';
        $this->currency = 'USD';
        $this->registrar = 'godaddy';
    }

}
