import "./App.css";
import Clientes from "./view/admin/Clientes";
import { ThemeProvider } from "@mui/material/styles";
import theme from "./components/Color";
import Users from "./view/admin/Users";
import Proveedores from "./view/admin/Proveedores";

function App() {
  return (
    <>
      <ThemeProvider theme={theme}>
        <Proveedores />
      </ThemeProvider>
    </>
  );
}

export default App;
