<?php

namespace Ceidin\Http\Controllers;

use Illuminate\Http\Request;
use Ceidin\Http\Requests;
use Ceidin\Models\Cargo;
use Ceidin\Models\Persona;
use Ceidin\Models\Empleado;
use Ceidin\Models\Usuario;
use DB;
use Redirect;
use Session;
use Ceidin\Http\Requests\EmpleadoRequest;

class EmpleadoController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //$cargo = Cargo::All();
        //$cargo = Cargo::pluck('id','nombre');

        //$cargo = DB::table('cargo')->orderBy('id')->pluck('nombre','id');
        // echo "<pre>";
        // print_r($cargo);
         
        // $cargo = DB::table('cargo')->orderBy('id')->get();
        // print_r($cargo);
/*
        $data['empleados'] = DB::table('persona')
                                    ->orderBy('nombre')
                                    ->pluck(
                                        'nombre_1',
                                        'nombre_2',
                                        'apellido_1',
                                        'apellido_2',
                                        'cedula',
                                        'direccion',
                                        'teledono',
                                        'fecha_nacimiento'
                                );
*/
/*
        $personas = Persona::ALL();

        foreach ($personas as $persona) {
            echo "Cargo: ".$persona->id_persona;
            echo $persona->nombre_1." ";
            echo $persona->nombre_2." ";
            echo $persona->apellido_1." ";
            echo $persona->apellido_2."<br>";
        }
        echo "<hr>";

        $empleados = Empleado::All();

        foreach ($empleados as $empleado) {
            echo "Empleado: ".$empleado->id_persona;
            echo "        Cargo: ".$empleado->id_cargo."<br>";
        }
*/

        $empleados = DB::table('empleado')
                    ->join('persona', 'empleado.id_persona', '=', 'persona.id')
                    ->join('cargo', 'empleado.id_cargo', '=', 'cargo.id')
                    ->select('persona.id','persona.nombre_1','persona.nombre_2',
                             'persona.apellido_1','persona.apellido_1',
                             'persona.cedula','persona.direccion',
                             'persona.telefono','cargo.nombre as cargo'
                         )
                    ->get();

                    
/*
        foreach ($empleados as $empleado) {
            echo $empleado->nombre_1." ".$empleado->apellido_1." tiene el cargo de ".$empleado->cargo."<br>";
        }
*/
/*        
        $empleados = Empleado::All();
        $trabajadores = array();
        foreach ($empleados as $empleado) {
            $trabajadores[] = Persona::find($empleado->id_persona);
        }
        $data['empleados'] = $trabajadores;
*/

        $data['empleados'] = $empleados;
        $data['cargos'] = DB::table('cargo')->orderBy('id')->pluck('nombre','id');
        return view('empleado.index', $data);
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
    public function store(EmpleadoRequest $request){
        
        DB::beginTransaction();
        try{
            $persona = new Persona;
            $persona->nombre_1 = $request["nombre_1"];
            $persona->nombre_2 = $request["nombre_2"];
            $persona->apellido_1 = $request["apellido_1"];
            $persona->apellido_2 = $request["apellido_2"];
            $persona->cedula = $request["cedula"];
            $persona->direccion = $request["direccion"];
            $persona->telefono = $request["telefono"];
            $persona->fecha_nacimiento = '2000-05-05';

            if($persona->save() ){
                $empleado = new Empleado;
                $empleado->id_persona = $persona->id;
                $empleado->id_cargo = $request["cargo"];

                try{
                    if($empleado->save()){
                        $usuario = new Usuario;
                        $usuario->id_persona = $persona->id;
                        $usuario->usuario = $persona->cedula;
                        $usuario->password = encrypt($persona->cedula);
                        $usuario->correo = $request['correo'];
                        $usuario->id_estatus = 1;
                        try{
                            if($usuario->save())
                                DB::commit();
                            else
                                DB::rollback();
                        }catch(Exception $e){
                            Session::flash('message-errors','Error. no se pudo registrar el usuario');
                            return Redirect::to('/empleado');
                        }
                    }else
                        DB::rollback();
                }catch(Exception $e){
                    Session::flash('message-errors','Error. Verifique el cargo del empleado');
                    return Redirect::to('/empleado');
                };

            } else
                DB::rollback();
        } catch(Exception $e){
            Session::flash('message-errors','Error. verifique sus datos');
            return Redirect::to('/empleado');
        };

        Session::flash('message','Usuario creado exitosamente.');
        return Redirect::to('/empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $data['empleado'] = DB::table('empleado')->where('id_persona',$id)
                            ->join('persona', 'empleado.id_persona', '=', 'persona.id')
                            ->join('cargo', 'empleado.id_cargo', '=', 'cargo.id')
                            ->select('persona.id','persona.nombre_1','persona.nombre_2',
                                     'persona.apellido_1','persona.apellido_2',
                                     'persona.cedula','persona.direccion',
                                     'persona.telefono','cargo.nombre as cargo',
                                     'cargo.id as id_cargo'
                                 )
                            ->get();

        //$empleado = $data['empleado'][0];
        //print_r($data['empleado']);
        //$empleado = Persona::find($id);
        //echo $data['empleado'][0]->cargo ;
        $cargos = DB::table('cargo')->orderBy('id')->pluck('nombre','id');
        //$cargos = Cargo::All();
        //$data['empleado'] = Empleado::find($id);
        return view('empleado.edit', ['empleado'=>$data['empleado'][0], 'cargos'=>$cargos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
/*
        $data['empleado'] = DB::table('empleado')->where('id_persona',$id)
                            ->join('persona', 'empleado.id_persona', '=', 'persona.id')
                            ->join('cargo', 'empleado.id_cargo', '=', 'cargo.id')
                            ->select('persona.id','persona.nombre_1','persona.nombre_2',
                                     'persona.apellido_1','persona.apellido_2',
                                     'persona.cedula','persona.direccion',
                                     'persona.telefono','cargo.nombre as cargo',
                                     'cargo.id as id_cargo'
                                 )
                            ->get();
        $empleado = $data['empleado'][0];
        $data['empleado'] = null;
        echo $request["nombre_1"];
        $empleado->nombre_1 = $request["nombre_1"];
        $empleado.save();
*/
        $persona = Persona::find($id);
        $persona->fill($request->all());
        $persona->save();

        $empleado = Empleado::find($id);
        //$empleado->fill($request->all());
        $empleado->id_cargo = $request["cargo"];
        $empleado->save();


        Session::flash('message','Usuario actualizado exitosamente.');
        return Redirect::to('/empleado');

/*        
        DB::beginTransaction();
        try{
            $persona = new Persona;
            $persona->nombre_1 = $request["nombre_1"];
            $persona->nombre_2 = $request["nombre_2"];
            $persona->apellido_1 = $request["apellido_1"];
            $persona->apellido_2 = $request["apellido_2"];
            $persona->cedula = $request["cedula"];
            $persona->direccion = $request["direccion"];
            $persona->telefono = $request["telefono"];
            $persona->fecha_nacimiento = '2000-05-05';

            if($persona->save() ){
                $empleado = new Empleado;
                $empleado->id_persona = $persona->id;
                $empleado->id_cargo = $request["cargo"];

                try{
                    if($empleado->save())
                        DB::commit();
                    else
                        DB::rollback();
                }catch(Exception $e){
                    Session::flash('message-errors','Error. Verifique el cargo del empleado');
                    return Redirect::to('/empleado');
                };

            } else
                DB::rollback();
        } catch(Exception $e){
            Session::flash('message-errors','Error. verifique sus datos');
            return Redirect::to('/empleado');
        };
*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
/*
        DB::beginTransaction();
        try{
            if(Empleado::destroy($id)){
                try{
                    if(Persona::destroy($id)){
                        try{
                            if(Usuario::destroy($id))
                                DB::commit();
                            else
                                DB::rollback();
                        } catch(Exception $e){
                            Session::flash('message-errors','Error al eliminar usuario');
                            return Redirect::to('empleado');
                        }
                    }
                    else
                        DB::rollback();
                } catch(Exception $e){
                    Session::flash('message-errors','Error al eliminar persona');
                    return Redirect::to('empleado');
                }
            }else
                DB::rollback();
        } catch(Exception $e){
            Session::flash('message-errors','Error al eliminar empleado');
            return Redirect::to('empleado');
        }
*/

        DB::beginTransaction();
        try{
            if(Empleado::destroy($id)){
                try{
                    if(Usuario::destroy($id)){
                        try{
                            if(Persona::destroy($id))
                                DB::commit();
                            else
                                DB::rollback();
                        } catch(Exception $e){
                            Session::flash('message-errors','Error al eliminar persona');
                            return Redirect::to('empleado');
                        }
                    }
                    else
                        DB::rollback();
                } catch(Exception $e){
                    Session::flash('message-errors','Error al eliminar usuario');
                    return Redirect::to('empleado');
                }
            }else
                DB::rollback();
        } catch(Exception $e){
            Session::flash('message-errors','Error al eliminar empleado');
            return Redirect::to('empleado');
        }
        Session::flash('message','El usuario ha sido eliminado exitosamente.');
        return Redirect::to('empleado');
        
    }
}
