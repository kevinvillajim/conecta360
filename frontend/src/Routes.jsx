import { Routes as ReactRoutes, Route } from "react-router-dom";
import Clientes from "./view/admin/Clientes";
import Users from "./view/admin/Users";
import Proveedores from "./view/admin/Proveedores";
import Productos from "./view/admin/Productos";
import Teams from "./view/admin/Teams";

const Routes = () => {
  return (
    <ReactRoutes>
      <Route
        path="/clientes"
        element={<Clientes />}
      />
      <Route
        path="/teams"
        element={<Teams />}
      />
      <Route
        path="/usuarios"
        element={<Users />}
      />
      <Route
        path="/proveedores"
        element={<Proveedores />}
      />
      <Route
        path="/productos"
        element={<Productos />}
      />
      <Route
        path="/teams"
        element={<Teams />}
      />
      <Route
        path="/"
        element={<Users />}
      />
    </ReactRoutes>
  );
};

export default Routes;
