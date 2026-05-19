import { Outlet } from "react-router-dom";
import Navbar from "./components/layouts/navbar";

function Layouts() {
  return (
    <>
      <Navbar className="flex relative z-50" />
      <main className="pt-20">
        <Outlet />
      </main>
    </>
  );
}

export default Layouts;
