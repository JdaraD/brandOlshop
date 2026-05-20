import { Outlet } from "react-router-dom";
import Navbar from "./components/layouts/navbar";
import Footer from "./components/layouts/footer";

function Layouts() {
  return (
    <>
      <Navbar className="flex relative" />
      <main className="pt-16">
        <Outlet />
      </main>
      <Footer />
    </>
  );
}

export default Layouts;
