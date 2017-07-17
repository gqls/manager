<?php

namespace App\Http\Controllers\Domains;

use Illuminate\Http\Request;
use App\Entity\DomainName;
use App\Http\Controllers\Controller;
use Modelizer\Selenium\SeleniumServiceProvider;

use Carbon\Carbon;

class DomainNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //$this->middleware('auth');

        $domainModel = new DomainName();

        $domains = $domainModel->getDetails();

        return view('domains.index', compact('domains'));

    }

    public function showDomain($slug)
    {
        $domain = DomainName::whereName($slug)->firstOrFail();

        return view('domain.show', compact($domain));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $domainCreateForm)
    {
        // handle post of form
        // view with form
        $domainModel = new DomainName;
        $domainModel->save();

    }

    public function uploadDomains($domains)
    {
        foreach ($domains as $domain => $details)
        {
            $domain = new DomainName();
            $domain->addDetails($details);
            $domain->save();
        }

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

$domainModel = new DomainName();
echo ('domain created');
var_dump('domains', $domainModel->first()->name);
echo __FILE__. __LINE__;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $this->middleware('auth');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
