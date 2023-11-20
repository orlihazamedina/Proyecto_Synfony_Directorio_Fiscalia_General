<?php

namespace DirectorioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DirectorioBundle\Entity\Tarea;
class DefaultController extends Controller
{
    public function indexAction()
    {
        
         $conuno=0;$condos=0;$contres=0;$concuatro=0;$concinco=0;$conmas=0;$conseis=0;  
      $repository = $this->getDoctrine() ->getRepository('DirectorioBundle:Tarea');    
    $query = $repository->createQueryBuilder('p')->groupBy('p.usuario') ->getQuery();
     $an = $query->getResult();       
     
        
         $em = $this->getDoctrine()->getManager();
		$producto = $em->getRepository('DirectorioBundle:Tarea')->findAll(); 
                
                
                foreach ($an as $item){
                    $contador=0;
                    foreach ($producto as $pro){   
                  if($item->getUsuario()==$pro->getUsuario())
                      $contador++;
                                
                }  
                if($contador==1)
                   $conuno++; 
                 if($contador==2)
                     $condos++;
                     
                 if($contador==3)
                     $contres++;
                 if($contador==4)
                     $concuatro++;
                 if($contador==5)
                     $concinco++;
                 if($contador==6)
                     $conseis++;
                  if($contador>6)  
                      $conmas++;
                }
                
        
        
         $em = $this->getDoctrine()->getManager();
         $un = $em->getRepository('DirectorioBundle:Tarea')->findBy(array('tarea'=>'Componente de Preparacion y Superacion Tecnica Profesional'));   
        $uno=  count($un);
        
         $do = $em->getRepository('DirectorioBundle:Tarea')->findBy(array('tarea'=>'Componente de Preparacion y Superacion para la Defensa'));   
        $dos=  count($do);
        
        $tre = $em->getRepository('DirectorioBundle:Tarea')->findBy(array('tarea'=>'Componente de Preparacion y Superacion Economica'));   
        $tres=  count($tre);
        
         $cuatr = $em->getRepository('DirectorioBundle:Tarea')->findBy(array('tarea'=>'Componente de Preparacion y Superacion en Direccion'));   
        $cuatro=  count($cuatr);
        
         $cinc = $em->getRepository('DirectorioBundle:Tarea')->findBy(array('tarea'=>'Componente de Preparacion y Superacion Politica Ideologica'));   
        $cinco=  count($cinc);
       $a='active'; 
        $total=$uno+$dos+$tres+$cuatro+$cinco;
        return $this->render('DirectorioBundle:Default:index.html.twig',array('conuno' =>$conuno,'condos' =>$condos,'contres' =>$contres,'concuatro' =>$concuatro,'concinco' =>$concinco,'conseis' =>$conseis,'conmas' =>$conmas,'an' =>$an,'total' =>$total,'a' =>$a,'uno' =>$uno,'tres' =>$tres,'dos' =>$dos,'cuatro' =>$cuatro,'cinco' =>$cinco));
    }
    
       public function usuarioAction(Request $request,$usuario,$nombre,$oficina)
               
    {
           
             $em = $this->getDoctrine()->getManager();
	//	$productos = $em->getRepository('UnoMainBundle:Expediente')->findBytipoExpediente("Tramitacion");
   $repository = $em->getRepository('DirectorioBundle:Tarea'); 
           
            $query = $repository->createQueryBuilder('p') ->where('p.usuario =:expediente ')->setParameter('expediente',$usuario) ->orderBy('p.fecha', 'ASC') ->getQuery();
     $producto = $query->getResult();  
           
             $sesion=$request->getSession();
        $sesion->set('user',$usuario);
        
         $sesion=$request->getSession();
        $sesion->set('nombre',$nombre);
        
         $sesion=$request->getSession();
        $sesion->set('oficina',$oficina);
           
       $cantidad=count($producto);
         $a='active'; 
        return $this->render('DirectorioBundle:Default:persona.html.twig',array('a' =>$a,'cantidad' =>$cantidad,'producto' => $producto,'usuario' => $usuario,'nombre' => $nombre,'oficina' => $oficina));
    }
    public function telefonoAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:telefonos.html.twig',array('b' =>$b));
    }
    
    public function centrohabanaAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:centrohabana.html.twig',array('b' =>$b));
    }
    
    
    public function hvAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:hv.html.twig',array('b' =>$b));
    }
    
    public function cotorroAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:cotorro.html.twig',array('b' =>$b));
    }
    
     public function reglaAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:regla.html.twig',array('b' =>$b));
    }
    
    public function sanmiguelAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:sanmiguel.html.twig',array('b' =>$b));
    }
    
     public function plazaAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:plaza.html.twig',array('b' =>$b));
    }
     public function playaAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:plaza.html.twig',array('b' =>$b));
    }
     public function hesteAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:heste.html.twig',array('b' =>$b));
    }
     public function cerroAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:cerro.html.twig',array('b' =>$b));
    }
    
     public function marianaoAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:marianao.html.twig',array('b' =>$b));
    }
    
    public function arroyoAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:arroyo.html.twig',array('b' =>$b));
    }
     public function octubreAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:10octubre.html.twig',array('b' =>$b));
    }
    
    
    public function boyerosAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:boyeros.html.twig',array('b' =>$b));
    }
    
    public function guanabacoaAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:guanabacoa.html.twig',array('b' =>$b));
    }
    
    
     public function divicoAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:divico.html.twig',array('b' =>$b));
    }
    
    
      public function lisaAction()
    {
         $b='active'; 
        return $this->render('DirectorioBundle:Default:lisa.html.twig',array('b' =>$b));
    }
      public function paswordAction()
    {
        $usario='fplh';
        $pass='Realmadrid2015';
  global $message;
  global $message_css;
  $user='orlando';
 $oldPassword='Ohm**18';
  $server = "10.2.2.2";
  $newPassword='vvvvvvvv';
          $newPasswordCnf='vvvvvvvv';
 $dn = "OU=Departamentos,DC=fpch,DC=fgr,DC=gob,DC=cu";
    
  error_reporting(0);
  ldap_connect($server);
  $con = ldap_connect($server);
  ldap_set_option($con, LDAP_OPT_PROTOCOL_VERSION, 3);
  
  
   $bd = ldap_bind($con, $usario, $pass)
    or die ("Imposible Validar en el Servidor LDAP");
    
  // bind anon and find user by uid
  $user_search = ldap_search($con,$dn,"samaccountname=$user");
  $user_get = ldap_get_entries($con, $user_search);
  $user_entry = ldap_first_entry($con, $user_search);
  $user_dn = ldap_get_dn($con, $user_entry);
  $user_id = $user_get[0]["samaccountname"][0];
  $user_givenName = $user_get[0]["givenName"][0];
  $user_search_arry = array( "*", "ou", "samaccountname", "passwordRetryCount", "passwordhistory" );
  $user_search_filter = "samaccountname=$user";
  $user_search_opt = ldap_search($con,$user_dn,$user_search_filter,$user_search_arry);
  $user_get_opt = ldap_get_entries($con, $user_search_opt);
  $passwordRetryCount = $user_get_opt[0]["passwordRetryCount"][0];
  $passwordhistory = $user_get_opt[0]["passwordhistory"][0];
   
  //$message[] = "Username: " . $user_id;
  //$message[] = "DN: " . $user_dn;
  //$message[] = "Current Pass: " . $oldPassword;
  //$message[] = "New Pass: " . $newPassword;
   
  /* Start the testing */
  if ( $passwordRetryCount == 3 ) {
    $message[1] = "Error E101 - Your Account is Locked Out!!!";
    echo $message[1];
    return false;
  }
  if (ldap_bind($con, $user_dn, $oldPassword) === false) {
    $message[2] = "Error E101 - Current Username or Password is wrong.";
    echo $message[2];
    return false;
  }
  if ($newPassword != $newPasswordCnf ) {
    $message[3] = "Error E102 - Your New passwords do not match!";
    echo $message[3];
    return false;
  }
  $encoded_newPassword = "{SHA}" . base64_encode( pack( "H*", sha1( $newPassword ) ) );
  $history_arr = ldap_get_values($con,$user_dn,"passwordhistory");
  if ( $history_arr ) {
    $message[4] = "Error E102 - Your new password matches one of the last 10 passwords that you used, you MUST come up with a new password.";
  
    echo $message[4];
    return false;
  }
  if (strlen($newPassword) < 8 ) {
    $message[5] = "Error E103 - Your new password is too short.<br/>Your password must be at least 8 characters long.";
  echo $message[5];
    
    return false;
  }
  if (!preg_match("/[0-9]/",$newPassword)) {
    $message[6] = "Error E104 - Your new password must contain at least one number.";
   echo $message[6];
    
    return false;
  }
  if (!preg_match("/[a-zA-Z]/",$newPassword)) {
    $message[7] = "Error E105 - Your new password must contain at least one letter.";
  echo $message[7];
    
    return false;
  }
  if (!preg_match("/[A-Z]/",$newPassword)) {
    $message[8] = "Error E106 - Your new password must contain at least one uppercase letter.";
  echo $message[8];
    
    return false;
  }
  if (!preg_match("/[a-z]/",$newPassword)) {
    $message[9] = "Error E107 - Your new password must contain at least one lowercase letter.";
  echo $message[9];
    
    
    return false;
  }
  if (!$user_get) {
   
      
      $message[10] = "Error E200 - Unable to connect to server, you may not change your password at this time, sorry.";
 echo $message[10];
      
      return false;
  }
  
  
  
  $auth_entry = ldap_first_entry($con, $user_search);
  $mail_addresses = ldap_get_values($con, $auth_entry, "mail");
  $given_names = ldap_get_values($con, $auth_entry, "givenName");
  $password_history = ldap_get_values($con, $auth_entry, "passwordhistory");
  $mail_address = $mail_addresses[0];
  $first_name = $given_names[0];
   
  /* And Finally, Change the password */
  $entry = array();
  $entry["userPassword"] = "$encoded_newPassword";
   
  if (ldap_modify($con,$user_dn,$entry) === false){
    $error = ldap_error($con);
    $errno = ldap_errno($con);
    $message[] = "E201 - Your password cannot be change, please contact the administrator.";
    $message[] = "$errno - $error";
    return false;
    
  } else {
    $message_css = "yes";
    mail($mail_address,"Password change notice","Dear $first_name,
Your password on http://support.example.com for account $user_id was just changed. If you did not make this change, please contact support@example.com.
If you were the one who changed your password, you may disregard this message.
 
Thanks
-Matt");
    $message[] = "The password for $user_id has been changed.<br/>An informational email as been sent to $mail_address.<br/>Your new password is now fully Active.";
  }

 
            $b='active'; 
      return $this->render('DirectorioBundle:Default:lisa.html.twig',array('b' =>$b));
          
           }
      
     public function findAction()
    {
         $nombre=$this->get('request')->request->get('busco'); 
            //Asigno variables para accesar al servidor LDAP
    $host = "10.2.2.2";
    $user = "fplh";
    $pswd = "Realmadrid2015";
 
    $ad = ldap_connect($host)
    or die("Imposible Conectar");
 
    // Especifico la versión del protocolo LDAP
    ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3)
    or die ("Imposible asignar el Protocolo LDAP");
 
    // Valido las credenciales para accesar al servidor LDAP
    $bd = ldap_bind($ad, $user, $pswd)
    or die ("Imposible Validar en el Servidor LDAP");
 
    // Creo el DN
    $dn = "OU=Departamentos,DC=fpch,DC=fgr,DC=gob,DC=cu";
 
    // Especifico los parámetros que quiero que me regrese la consulta
    $attrs = array("displayname","mail","samaccountname","givenname","description");
 
    // Creo el filtro para la busqueda
    
    $filter="(|(physicaldeliveryofficename=$nombre)(givenname=$nombre)(samaccountname=$nombre))";
 
    $search = ldap_search($ad, $dn, $filter)
    or die ("");

   $entrada= ldap_get_entries($ad, $search);
   ldap_unbind($ad);
    

   $cuenta=count($entrada);
 
  
     $a='active'; 
         
        return $this->render('DirectorioBundle:Default:index1.html.twig', array('a' => $a,'cuenta' => $cuenta,'nombre' => $nombre,'entrada' => $entrada));
    }
    
    
     public function filtrarAction($tipo)
    {
         $nombre=$tipo;
            //Asigno variables para accesar al servidor LDAP
    $host = "10.2.2.2";
    $user = "fplh";
    $pswd = "Realmadrid2015";
 
    $ad = ldap_connect($host)
    or die("Imposible Conectar");
 
    // Especifico la versión del protocolo LDAP
    ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3)
    or die ("Imposible asignar el Protocolo LDAP");
 
    // Valido las credenciales para accesar al servidor LDAP
    $bd = ldap_bind($ad, $user, $pswd)
    or die ("Imposible Validar en el Servidor LDAP");
 
    // Creo el DN
    $dn = "OU=Departamentos,DC=fpch,DC=fgr,DC=gob,DC=cu";
 
    // Especifico los parámetros que quiero que me regrese la consulta
    $attrs = array("displayname","mail","samaccountname","givenname","description");
 
    // Creo el filtro para la busqueda
    
    $filter="(|(physicaldeliveryofficename=$nombre)(givenname=$nombre)(samaccountname=$nombre))";
 
    $search = ldap_search($ad, $dn, $filter)
    or die ("");

   $entrada= ldap_get_entries($ad, $search);
   ldap_unbind($ad);
    

   $cuenta=count($entrada);
 
  
     $a='active'; 
         
        return $this->render('DirectorioBundle:Default:index1.html.twig', array('a' => $a,'cuenta' => $cuenta,'nombre' => $nombre,'entrada' => $entrada));
    }
    
    public function guardarAction(Request $request)
    {
        $sesion=$request->getSession();
      
                $name=$sesion->get('user'); 
        
         $em = $this->getDoctrine()->getManager();
        $producto = new Tarea();
         $a=$this->get('request')->request->get('unidad'); 
          $b=$this->get('request')->request->get('entradaqueja'); 
           $c=$this->get('request')->request->get('about'); 
             $producto-> setUsuario($name);
    
          $producto-> setTarea($a);
           $producto->setFecha($b);
           $producto->setComponente($c);
        
        $em->persist($producto);
			$em->flush();
        
        
      $em = $this->getDoctrine()->getManager();
	//	$productos = $em->getRepository('UnoMainBundle:Expediente')->findBytipoExpediente("Tramitacion");
   $repository = $em->getRepository('DirectorioBundle:Tarea'); 
            $sesion=$request->getSession();
      
                $name=$sesion->get('user'); 
                
                  $nombre=$sesion->get('nombre'); 
        
          $oficina=$sesion->get('oficina'); 
                
            $query = $repository->createQueryBuilder('p') ->where('p.usuario =:expediente ')->setParameter('expediente',$name) ->orderBy('p.fecha', 'ASC') ->getQuery();
     $producto = $query->getResult(); 
     
     $cantidad=count($producto);
     
          $a='active';        
			 return $this->render('DirectorioBundle:Default:persona.html.twig', array(
        
       'a' => $a, 'cantidad' =>$cantidad,'producto' => $producto,'usuario' => $name,'nombre' => $nombre,'oficina' => $oficina
    ));
                         
    }
    
    
    
public function deleteAction(Request $request,$id){
		$em = $this->getDoctrine()->getManager();
		$producto = $em->getRepository('DirectorioBundle:Tarea')->find($id);
               
		
		$em->remove($producto);
		$em->flush();
               
	 $em = $this->getDoctrine()->getManager();
	//	$productos = $em->getRepository('UnoMainBundle:Expediente')->findBytipoExpediente("Tramitacion");
   $repository = $em->getRepository('DirectorioBundle:Tarea'); 
            $sesion=$request->getSession();
      
                $name=$sesion->get('user'); 
                
                  $nombre=$sesion->get('nombre'); 
        
          $oficina=$sesion->get('oficina'); 
                
            $query = $repository->createQueryBuilder('p') ->where('p.usuario =:expediente ')->setParameter('expediente',$name) ->orderBy('p.fecha', 'ASC') ->getQuery();
     $producto = $query->getResult(); 
     
     $cantidad=count($producto);
     
                  
			 return $this->render('DirectorioBundle:Default:persona.html.twig', array(
        
        'cantidad' =>$cantidad,'producto' => $producto,'usuario' => $name,'nombre' => $nombre,'oficina' => $oficina
    ));
                         
                         
                     
             
}
}