import {
    registro
} from './statesHandler.js'

const edicionesAnteriores = {
    render: () => {
      return `
        <section>
          <h1>edicionesAnteriores</h1>
          <p>edicionesAnteriores</p>
        </section>
      `;
    }
  } 

  
  const agenda = {
    render: () => {
      return `
        <section>
          <h1>agenda</h1>
          <p>agenda</p>
        </section>
      `;
    }
  } 
  
  const ErrorComponent = {
    render: () => {
      return `
        <section>
          <h1>Error</h1>
          <p>404</p>
        </section>
      `;
    }
  }
 
  const routes = [
    { path: '/agenda', component: agenda, },
    { path: '/ediciones-anteriores', component: edicionesAnteriores, },
  ];

  const parseLocation = () => location.hash.slice(1).toLowerCase() || '/';
  
  const findComponentByPath = (path, routes) => routes.find(r => r.path.includes(path)) || undefined;

  export const Router = () => {
    const path = parseLocation();
    console.log(path)
    if ((path==='/')||(path==='inicio')){
        registro();
    }else{
        const { component = ErrorComponent } = findComponentByPath(path, routes) || {};
        document.getElementById('current-state').innerHTML = component.render();
    }
  };