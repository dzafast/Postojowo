<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visit;

Use App\Repositories\VisitRepository;

class VisitController extends Controller
{
    public function index(VisitRepository $visitRepo){
        $visit = $visitRepo->getAll();

            return view('visit.list', ["visitList" => $visit,
                                        "footerYear" => date("Y"),
                                        "title" => "Moduł Wizyt",
                                        "hrefTitle" => "Wizyty"]);
    }
    public function delete(VisitRepository $visitRepo, $id){
        $visit = $visitRepo->delete($id);
        return redirect('visit');
    }
}
