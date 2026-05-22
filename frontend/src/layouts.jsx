import { Outlet } from "react-router-dom";
import Navbar from "./components/layouts/navbar";
import Footer from "./components/layouts/footer";
import { useEffect, useState } from "react";
import { Helmet } from "react-helmet";

function Layouts() {
  const [websiteName, setWebsiteName] = useState(null);

  useEffect(() => {
    fetch("http://localhost:8000/api/profile-website")
      .then((response) => response.json())
      .then((data) => setWebsiteName(data.data))
      .catch((err) => console.log(err));
  }, []);

  if (!websiteName) return <p>Name Brand</p>;

  return (
    <>
      <Helmet>
        <title className="capitalize">{websiteName?.name}</title>
        <link className="w-4 h-4" rel="icon" href={websiteName?.logo} />
      </Helmet>

      <link rel="icon" type="image/svg+xml" href="{websiteName.data.}" />
      <title className="capitalize">{websiteName.name}</title>
      <Navbar className="flex relative" />
      <main className="pt-16">
        <Outlet />
      </main>
      <Footer />
    </>
  );
}

export default Layouts;
