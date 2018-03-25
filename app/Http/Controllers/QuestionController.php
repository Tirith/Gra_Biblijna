<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
session_start();
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (isset($_SESSION['losuj'])){
            $ile = Question::count();
            $losowe_id = rand(1, $ile);
            $zmiana_poz = 5; //co ile pytań ma się zmienić poziom
            $ilość_poz = 5; //ilosc poziomów
            
            if ($_SESSION['poprawne_odp'] == $zmiana_poz)
            {
               $_SESSION['poziom']++; 
               $_SESSION['poprawne_odp']=0;
            }
            if ($_SESSION['poziom'] < $ilość_poz)
            {
                $_SESSION['poprawne_odp']++;
            }
            

            $pytanie = Question::where('trudnosc', $_SESSION['poziom'])->orderByRaw('RAND()')->firstOrFail();
            $_SESSION['losuj']++;
        } else{
            $_SESSION['losuj'] = 1;    
        }
        
        
        $ile = Question::count();
        return view('question', compact('pytanie'));
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
        //return view('question', array('id' => $id));
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
}
