<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;


class ClienteController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }


    public function cadastrarCliente(Request $request){
        

        if($request){

            $empresa = new Empresa();
                
            $empresa->save();
        }



        return false;
    }

    public function buscarCliente(Request $request){
        return null;
    }
    
    public function buscarClientes(){
        return null;
    }

    public function atualizarCliente(Request $request){
        return false;
    }

    public function deletarCliente(Request $request){
        return false;
    }
}