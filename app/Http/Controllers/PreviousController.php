<?php

namespace App\Http\Controllers;

use PDF;

class PreviousController extends Controller {

	/**

	 * Display a listing of the resource.

	 *

	 * @return \Illuminate\Http\Response

	 */

	public function generatePDF() {

		$data = ['title' => 'Ton plan de vol en PDF'];

		$pdf = PDF::loadView('previous', $data);
		return $pdf->download('plandevol.pdf');

	}
}
