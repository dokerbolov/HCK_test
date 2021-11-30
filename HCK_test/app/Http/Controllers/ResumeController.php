<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResumeUser;
use App\Http\Controller\Auth;
use PDF;

class ResumeController extends Controller
{

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'description' => ['required', 'string'],
      ]);
  }

  public function show(){
      $user = auth()->user();
      $resume = ResumeUser::all();
      return view('showUser', ['data' => $user],['resumes' => $resume]);
  }

  public function createResume(){
      $user = auth()->user();
      return view('createResume',['data' => $user]);
  }

  public function showOneResume($resume){
     $resume = ResumeUser::find($resume);
     return view('oneResume',['resume' => $resume]);
  }

  public function deleteResume($resume){
    $resume = ResumeUser::find($resume)->delete();
    return redirect()->route('showUser')->with('Success', 'Deleted');
  }

  public function submitNewResume(Request $req){
      $resume = new ResumeUser();
      $user = auth()->user();
      $resume-> name = $user->name;
      $resume-> surname = $user->surname;
      $resume-> date_of_birth = $user->date_of_birth;
      $resume-> email = $user->email;
      $resume-> tel_number = $user->tel_number;
      $resume-> description = $req->input('description');

      $resume->save();

      return redirect()->route('showUser')->with('success','Added');
  }

  public function updateResume($resume){
      $resume = ResumeUser::find($resume);
      return view('updateResume', ['resume' => $resume]);
  }

  public function update_resume_submit(Request $req, $resume) {
      $user = auth()->user();
      $resume = ResumeUser::find($resume);
      $resume-> name = $user->name;
      $resume-> surname = $user->surname;
      $resume-> date_of_birth = $user->date_of_birth;
      $resume-> email = $user->email;
      $resume-> tel_number = $user->tel_number;
      $resume -> description = $req->description;

      $resume->save();

      return redirect()->route('oneResume', $resume)->with('success','Changed');
  }

  public function downloadPDF($resume){
      $resume = ResumeUser::find($resume);
      $pdf = PDF::loadView('oneResume',['resume' => $resume])->setOptions(['defaultFont' => 'sans-serif']);
      return $pdf->download('resume.pdf');
  }

  public function goChange(){
      $user = auth()->user();
      return view('userChange', compact('user')); 
  }

  public function changeUserData(Request $req){
      $user = auth()->user();
      $user-> name = $req->name;
      $user-> surname = $req->surname;
      $user-> date_of_birth = $req->date_of_birth;
      $user-> email = $req->email;
      $user-> tel_number = $req->tel_number;

      $user->save();

      return redirect()->home()->with('succes', 'Changed');
  }
}
