<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ScriptController extends Controller {
    //

    public function deteccao() {
        echo $this->run('foto.py', [storage_path('app/foto/teste.png'), storage_path('app/processada/img.png')]);
    }

    private function run($script, $arg = []) {
        if (is_array($arg)) $arg = implode(" ", $arg);
        $python = 'C:/Users/carlo/AppData/Local/Programs/Python/Python37/python.exe';
        $script = escapeshellcmd(base_path("scripts\\$script"));
        $command = "$python $script $arg";
        $output = shell_exec($command);
        return $output;
    }
}
