<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller
{

  public function create(Request $request)
  {
    try {
      // start the backup process
      Artisan::call('backup:mysql-dump');
      $output = Artisan::output();

      $request->session()->flash('status', $output.'. Backup dir: '.storage_path('app/backups'));
      return redirect()->back();

    } catch (Exception $e) {

      $request->session()->flash('status', $e->getMessage());
      return redirect()->back();
    }
  }

}