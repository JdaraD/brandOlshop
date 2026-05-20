import { useEffect, useState } from "react";
import { data, Link } from "react-router-dom";
// import logo from "../../assets/images/logo.png";

import { FaHeart, FaShoppingCart, FaSearch } from "react-icons/fa";

function Navbar() {
  const [favorite, setFavorite] = useState(false);
  const [profile, setProfile] = useState(null);

  useEffect(() => {
    fetch("http://localhost:8000/api/profile-website")
      .then((res) => res.json())
      .then((data) => setProfile(data.data))
      .catch((err) => console.log(err));
  }, []);

  if (!profile) return <p>loding...</p>;

  return (
    <div className="bg-white">
      <nav className="border-b bg-white sticky top-0 z-50">
        <div className="fixed flex justify-between items-center px-8 bg-white w-full h-auto">
          {/* Logo */}
          <div className="flex justify-center items-center gap-2">
            <div className="flex justify-center items-center w-16 h-16">
              <img src={profile.logo} alt="logo" />
            </div>
            <h1 className="text-2xl font-black tracking-wider">NIKE</h1>
          </div>

          {/* Menu */}
          <div className="hidden md:flex gap-8 font-medium">
            <Link
              to="/"
              className="border-b-2 border-transparent hover:border-black transition"
            >
              Home
            </Link>

            <Link
              to="/categories"
              className="border-b-2 border-transparent hover:border-black transition"
            >
              Categories
            </Link>
            <Link
              to="/"
              className="border-b-2 border-transparent hover:border-black transition"
            >
              New & Featured
            </Link>

            <Link
              to="/menPage"
              className="border-b-2 border-transparent hover:border-black transition"
            >
              Men
            </Link>

            <Link
              to="/WomenPage"
              className="border-b-2 border-transparent hover:border-black transition"
            >
              Women
            </Link>

            <Link
              to="/"
              className="border-b-2 border-transparent hover:border-black transition"
            >
              Kids
            </Link>
          </div>

          {/* Right Menu */}
          <div className="flex items-center gap-4">
            {/* Search */}
            <div className="flex items-center gap-2 border rounded-lg px-3 py-2">
              <FaSearch id="" className="text-gray-500 cursor-pointer" />

              <input
                type="text"
                placeholder="Search..."
                className="outline-none text-sm"
              />
            </div>

            {/* Favorite */}
            <button
              onClick={() => setFavorite(!favorite)}
              className="text-2xl transition"
            >
              <FaHeart
                className={
                  favorite
                    ? "text-red-500 scale-110"
                    : "text-gray-400 hover:text-red-500"
                }
              />
            </button>

            {/* Cart */}
            <button className="text-2xl text-gray-600 hover:text-black transition">
              <FaShoppingCart />
            </button>
          </div>
        </div>
      </nav>
    </div>
  );
}

export default Navbar;
