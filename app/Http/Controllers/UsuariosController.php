<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\returnSelf;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $datos['usuarios']=Usuarios::paginate(5);
        return view('admin.index',$datos );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.create-usuarios');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosadmin = request()->except('_token');
        if($request->hasFile('Foto')){
            $datosadmin['Foto']=$request->file('Foto')->store('uploads'.'public');
        }
        Usuarios::insert($datosadmin);
        //return response()->json($datosadmin);
        return redirect('admin')->with('mensaje','Empleado agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $usuarios=Usuarios::findOrFail($id);

        return view('admin.edit-usuarios', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $datosadmin = request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $usuarios=Usuarios::findOrFail($id);
            Storage::delete('public/'.$usuarios->Foto);
            $datosadmin['Foto']=$request->file('Foto')->store('uploads'.'public');
        }
        Usuarios::where('id','=',$id)->update($datosadmin);
        
        $usuarios=Usuarios::findOrFail($id);
        return view('admin.edit-usuarios', compact('usuarios'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Usuarios::destroy($id);
        return redirect('admin')->with('mensaje','Empleado Borrado');
    }
}
