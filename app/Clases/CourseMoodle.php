<?php
namespace App\Clases;
use App\Models\Cmoodle;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class CourseMoodle {
    public $id;
    public $cmoodle;
    public $name,$shortname,$categoryid;
    public function __construct()
    {
        $this->cmoodle = Cmoodle::find(1);
    }

    public static function buscar($id)
    {
        $curso = new CourseMoodle();
        $curso->id = $id;
        return $curso;
    }

    public function crear()
    {
        $functionname = 'core_course_create_courses';
        $consulta = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&courses[0][fullname]='.$this->name
        .'&courses[0][shortname]='.$this->shortname
        .'&courses[0][categoryid]='.$this->categoryid;
        $c_curso = Http::get($consulta);
        if(isset(json_decode($c_curso)->exception))
        {
            return false;
        }
        else
        {   $this->id = json_decode($c_curso)[0]->id;
            return json_decode($c_curso)[0]->id;
        }
    }

    public function actualizar()
    {
        $functionname = 'core_course_update_courses';
        //prepar la consulta
        $consulta = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json'
        .'&courses[0][id]='.$this->id
        .'&courses[0][fullname]='.$this->name
        .'&courses[0][shortname]='.$this->shortname;
        //ejecutar consulta
        Http::get($consulta);
    }

    public function cambiar_estado($estado)
    {
        $functionname = 'core_course_update_courses';
        //prepar la consulta
        $consulta = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json'
        .'&courses[0][id]='.$this->id
        .'&courses[0][visible]='.$estado;
        //ejecutar consulta
        Http::get($consulta);
    }

    public function obtener_contenido()
    {
        $functionname = 'core_course_get_contents';
        //prepar la consulta
        $consulta = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json'
        .'&courseid='.$this->id;
        //ejecutar consulta
        $obtener_vista = Http::get($consulta);
        if(isset(json_decode($obtener_vista)->exception))
        {
            return false;
        }
        else
        {   $contenido = json_decode($obtener_vista);
            return $contenido;
        }
    }

    public function ocultar_seccion($seccion_id){
        $functionname = 'core_course_edit_section';
        $consulta2 = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&id='.$seccion_id
        . '&action=hide';
        Http::get($consulta2);
    }

    public function mostrar_seccion($seccion_id){
        $functionname = 'core_course_edit_section';
        $consulta2 = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&id='.$seccion_id
        . '&action=show';
        Http::get($consulta2);
    }

    public function ocultar_modulo($modulo_id){
        $functionname = 'core_course_edit_module';
        $consulta2 = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&id='.$modulo_id
        . '&action=hide';
        Http::get($consulta2);
    }

    public function mostrar_modulo($modulo_id){
        $functionname = 'core_course_edit_module';
        $consulta2 = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&id='.$modulo_id
        . '&action=show';
        Http::get($consulta2);
    }


    public function iniciar_quiz($quiz_id)
    {
        $functionname = 'mod_quiz_start_attempt';
        $consulta2 = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&quizid='.$quiz_id
        .'&forcenew=1';
        $iniciar_quiz = Http::get($consulta2);
        if(isset(json_decode($iniciar_quiz)->exception))
        {
            return false;
        }
        else
        {   $contenido = json_decode($iniciar_quiz);
            return $contenido;
        }
    }

    public function ver_quiz($attempt_id)
    {
        $functionname = 'mod_quiz_get_attempt_summary';
        $consulta2 = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&attemptid='.$attempt_id;
        $ver_quiz = Http::get($consulta2);
        if(isset(json_decode($ver_quiz)->exception))
        {
            return false;
        }
        else
        {   $contenido = json_decode($ver_quiz);
            return $contenido;
        }
    }

    public function procesar_quiz($attempt_id)
    {
        $functionname = 'mod_quiz_process_attempt';
        $consulta2 = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&attemptid='.$attempt_id
        .'&data[0][name]=q58:1_answer'
        .'&data[0][value]=1'
        .'&data[1][name]=q58:2_answer'
        .'&data[1][value]=1'
        .'&finishattempt=1';
        $ver_quiz = Http::get($consulta2);
        if(isset(json_decode($ver_quiz)->exception))
        {
            return false;
        }
        else
        {   $contenido = json_decode($ver_quiz);
            return $contenido;
        }
    }

    public function enviar_cuestionario($data_pregunta){
        dd($data_pregunta);
        $functionname = 'mod_quiz_process_attempt';
        $consulta2 = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json';

        $response = Http::post($consulta2,$data_pregunta);

    }

    public function crear_grupo($nombre){
        $functionname = 'core_group_create_groups';
        $consulta = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&groups[0][courseid]='.$this->id
        .'&groups[0][name]='.$nombre
        .'&groups[0][description]='.$nombre
        .'&groups[0][descriptionformat]=1';
        $c_grupo = Http::get($consulta);

        if(isset(json_decode($c_grupo)->exception))
        {
            return false;
        }
        else
        {
            return json_decode($c_grupo)[0]->id;
        }
    }

    public function eliminar_grupo($grupo_id){
        $functionname = 'core_group_delete_groups';
        $consulta = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&groupids[0]='.$grupo_id;
        $c_grupo = Http::get($consulta);
    }

    public function matricular_grupo_estudiante($grupo_id,$user_id){
        $functionname = 'core_group_add_group_members';
        $consulta = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&members[0][groupid]='.$grupo_id
        .'&members[0][userid]='.$user_id;
        $c_grupo = Http::get($consulta);
    }

    public function desmatricular_grupo_estudiante($grupo_id,$user_id){
        $functionname = 'core_group_delete_group_members';
        $consulta = $this->cmoodle->dominio
        . '?wstoken=' . $this->cmoodle->token
        . '&wsfunction='.$functionname
        .'&moodlewsrestformat=json&members[0][groupid]='.$grupo_id
        .'&members[0][userid]='.$user_id;
        $c_grupo = Http::get($consulta);
    }

    public function subir_imagen($nombre,$imagen,$curso_id)
    {
        #subir repositorio de moodle
        //$consulta = $this->subir_repositorio_moodle($nombre,$imagen);
        #subir a moodle la imagen de Perfil
        $file = file_get_contents(public_path(substr($imagen, 1)));
        //dd(base64_encode($file));
        $consulta = Http::asForm()->post('http://aprendiendo.jademlearning.com/webservice/rest/server.php',
        [
            'wstoken' => '3965c3e3228fac0de59b88b77c2625fb',
            'wsfunction' => 'local_ws_subir_imagen_curso',
            'moodlewsrestformat' => 'json',
            'component' => 'user',
            'filearea' => 'draft',
            'itemid' => 0,
            'filepath' => '/',
            'filename' => $nombre,
            'filecontent' => base64_encode($file),
            'contextlevel' => 'user',
            'instanceid' => 2,
            'courseid' => $curso_id,
        ]);
        //dd($consulta = $consulta->object());

        /*$functionname = 'core_files_upload';
        $consulta2 = $this->cmoodle->dominio
        .'?wstoken=' . $this->cmoodle->token
        .'&wsfunction='.$functionname
        .'&moodlewsrestformat=json'
        .'&component='.'course'#okey
        .'&filearea='.'overviewfiles'#okey
        .'&itemid=0' #okey
        .'&filepath=/'
        .'&filename=miarchivo.jpg'
        .'&filecontent='.$consulta['0']['itemid']
        .'&contextlevel='.'50'#okey
        .'&instanceid='.$curso_id;#okey
        dd($consulta2);
        $prueba = Http::get($consulta2);*/

    }

    public function subir_repositorio_moodle($nombre,$imagen){
        $consulta = Http::attach(
            'file_box', file_get_contents(public_path($imagen)),$nombre
        )->post(str_replace("rest/server.php","upload.php",$this->cmoodle->dominio).'?token='.$this->cmoodle->token);
        return $consulta = $consulta->json($key = null);
    }
}
?>
