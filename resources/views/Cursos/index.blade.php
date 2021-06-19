@extends('layouts.app')
@section('title', 'cursos')
@section('content')
<br/>
<h1> bienvenido a la pagina de cursos</h1>
<fieldset></fieldset>
<table class="table table-dark">
    <thead>
      <tr>
        <th>JavaScript</th>
        <th>React</th>
        <th>Angular</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
            <p>
                JavaScript (abreviado comúnmente JS) es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos,​ basado en prototipos, imperativo, débilmente tipado y dinámico. ... Todos los navegadores modernos interpretan el código JavaScript integrado en las páginas web.
            </p>
        </td>
        <td>
            <p>
                React (también llamada React. js o ReactJS) es una biblioteca Javascript de código abierto diseñada para crear interfaces de usuario con el objetivo de facilitar el desarrollo de aplicaciones en una sola página. Es mantenido por Facebook y la comunidad de software libre.
            </p>
        </td>
        <td>
            <p>
                Angular (comúnmente llamado Angular 2+ o Angular 2) es un framework para aplicaciones web desarrollado en TypeScript, de código abierto, mantenido por Google, que se utiliza para crear y mantener aplicaciones web de una sola página. ... Angular es la evolución de AngularJS aunque incompatible con su predecesor.
            </p>
        </td>
      </tr>
     
    </tbody>
  </table>
@endsection