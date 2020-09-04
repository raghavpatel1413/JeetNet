<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Chumper\Zipper\Zipper;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('question.index');
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
        $totalQuestion = 10;
        $exam_id = 25;
        /*$questions = new Question;

        $questions->question_subject = $request->rb_subject;
        
        $questions->currect_option = "Patel";

        $questions->exam_id = 25;

        $batchFile = $request->file('inputGroupFileBat');
        $batchName = $batchFile->getClientOriginalName();
        $file_path = $questions->exam_id.'/';
        $batchFile->move($file_path, $batchName);

        $zipper = new Zipper();

        $zipper->make(public_path($file_path.$batchName))->listFiles(); 

        $zipper->make(public_path($file_path.$batchName))->extractTo(public_path($file_path.'/')); 
        */

        $batchFile = $request->file('inputGroupFileBat');
        $batchName = $batchFile->getClientOriginalName();
        $file_path = $exam_id.'/';
        $batchFile->move($file_path, $batchName);

        $zipper = new Zipper();

        $zipper->make(public_path($file_path.$batchName))->listFiles(); 

        $zipper->make(public_path($file_path.$batchName))->extractTo(public_path($file_path.'/'));

        for ($i = 1; $i <= $totalQuestion; $i++){
            $questions = new Question;

            $questions->question_subject = $request->rb_subject;
            
            $questions->currect_option = "Patel";

            $questions->exam_id = 25;
 
            $questions->img_english = "/".$exam_id."/English/".$i.".jpg"; //$englishName;
            $questions->img_hindi = "/".$exam_id."/Gujarati/".$i.".jpg";//$hindiName;
            $questions->img_gujarati = "/".$exam_id."/Hindi/".$i.".jpg";// $gujaratiName;
            
            $questions->save();     
        }

        /*$englishFile = $request->file('inputGroupFileEng');
        $hindiFile = $request->file('inputGroupFileHind');
        $gujaratiFile = $request->file('inputGroupFileGuj');
        
        $englishName = $englishFile->getClientOriginalName();
        $hindiName = $hindiFile->getClientOriginalName();
        $gujaratiName = $gujaratiFile->getClientOriginalName();

        $file_path = $questions->exam_id.'/';

        $englishFile->move($file_path, $englishName);
        $hindiFile->move($file_path, $hindiName);
        $gujaratiFile->move($file_path, $gujaratiName);
        
        $questions->img_english = ""; //$englishName;
        $questions->img_hindi = "";//$hindiName;
        $questions->img_gujarati = "";// $gujaratiName;
        

        $questions->save();
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
