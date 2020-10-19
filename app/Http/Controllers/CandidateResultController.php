<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateResultController extends Controller
{
     public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->testresult){
            
            $tempvar = json_decode('{"OVERALL":{"name":"Post Man","email":"postmandemo7720191","comp_code":"0422000","registration_num":"","Test Id":"48377","testName":"Aspiration Test","domainName":"Psychometric","test_start_time":"2019-07-10 00:11:24","test_end_time":"2019-07-10 00:11:31.0","totalQuestion":"47","correctAttempt":"0","leftBlank":"47","maximumMark":"194","obtainMark":"0"},"reportLink":"https://wheeboxuat.com/WAT-3/fromMail.obj?comp_code=0422000&id=postmandemo7720191&testTime=2019-07-10+00%3A11%3A31&testName=Aspiration+Test&domainName=Psychometric"}');
            //dd($tempvar->OVERALL->email);
            // $var = json_encode($request->query('testresult'));
            //dd($var);
            $var = json_encode($request->testresult);
            $var=json_decode($var);
                dd($var);
            $candidate_result = \App\Candidate::where('mobile','=',$var->id)->first();
            if($var->OVERALL->testName == 'Aspiration Test'){
                $candidate_result->result1 = $var->reportLink;
            }else if($var->OVERALL->testName == 'BARO VI'){
                $candidate_result->result2 = $var->reportLink;
            }
            $candidate_result->update();
            if ($candidate_result) {
                $success['success'] = 1;
                $success['msg'] = 'Result Added Successfully';

                return response()->json($success, $this->successStatus);
            } else {
                $success['success'] = 0;
                return response()->json($success, $this->successStatus);
            }
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function storetest(Request $request)
    {
          // dd('herre1');
        $var = $request->all();
        
        $candidate_result = \App\Candidate::where('email','=',$var['id'])->first();
        if($var['testName'] == 'Aspiration Test'){
            $tar = \Request::getRequestUri();
            $result1 =str_replace('/api/testresult?testresult=&reportLink=', '', $tar);
            $candidate_result->resultUrl1 = $result1;
            $candidate_result->update();
        }else if($var['testName'] == 'BARO VI'){
            $tar = \Request::getRequestUri();
            $result2 =str_replace('/api/testresult?testresult=&reportLink=', '', $tar);
            $candidate_result->resultUrl2 = $result2;
            $candidate_result->update();
        }
        if ($candidate_result) {
            $success['success'] = 1;
            $success['msg'] = 'Result Added Successfully';
            return response()->json($success, $this->successStatus);
        }
        // else {
        //     $success['success'] = 0;
        //     return response()->json($success, $this->successStatus);
        // }

    }
}
