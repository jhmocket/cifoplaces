<?php

//contolador para las operaciones...
//cada método...
class PlaceController extends Controller{
    
    //operación por defecto
    public function index(){
        $this->list();          //redirige al método $list
    }
    
    //operación para listar los places
    public function list(int $page = 1){
        
        //recupera la lista de places y carga la vista
        //en la vista dispondremos de una variable llamada $places
        
        //operación para listar los places (con paginación)
        //Auth::admin();    //operación solamente para el administrador
        //datos para paginación
        $limit = RESULTS_PER_PAGE;  //resultados por página
        $total = Place::total();
        
        //crea un objeto paginator
        $paginator = new Paginator('/Place/list', $page, $limit, $total, 'es');
        
        //recupera los resultados para la página actual (el offset lo calcula el paginator)
        $places = Place::orderBy('id', 'DESC', $limit, $paginator->getOffset());
        
        $this->loadView('place/list', [
            'places' => $places,
            'paginator' => $paginator   //pasamos el objeto Paginator a la vista
        ]);
        //$this->loadView('place/list', ['places' => Place::get()]);
    }
    
    
    //método que muestra los detalles de un place
    public function show(int $id = 0){
        //comprobar que recibimos el id del place ppor parámetro
        if(!$place = Place::getById($id))
            throw new Exception("No se indicó el place indicado.");
            
            $ejemplares = $place->hasMany('Ejemplar');  //recupera ejemplares
            $temas      = $place->getTemas();           //recupera temas
            
            $this->loadView('place/show', [
                'place'         => $place,
                'ejemplares'    => $ejemplares,
                'temas'         => $temas
            ]);
    }
    
    
    //método que muestra el formulario de nuevo place
    public function create(){
        $this->loadView('place/create');
    }
    

    
}