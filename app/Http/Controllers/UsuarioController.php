<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function cadastrarUsuario(Request $request){
        
        return false;
    }

    public function buscarUsuario(Request $request){
        return null;
    }
    
    public function buscarUsuarios(){
        return null;
    }

    public function atualizarUsuario(Request $request){
        return false;
    }

    public function deletarUsuario(Request $request){
        return false;
    }
}