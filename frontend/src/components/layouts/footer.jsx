import { Link } from "react-router-dom";
import { FaSearch, FaShoppingBag, FaHeart, FaUser } from "react-icons/fa";

function Footer() {
  return (
    <footer className="bg-white border-t py-10">
      <div className="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">
        <div>
          <h3 className="font-bold mb-4">Products</h3>
          <ul className="space-y-2 text-gray-600">
            <li>Shoes</li>
            <li>Clothing</li>
            <li>Accessories</li>
          </ul>
        </div>

        <div>
          <h3 className="font-bold mb-4">Support</h3>
          <ul className="space-y-2 text-gray-600">
            <li>Help Center</li>
            <li>Shipping</li>
            <li>Returns</li>
          </ul>
        </div>

        <div>
          <h3 className="font-bold mb-4">Company</h3>
          <ul className="space-y-2 text-gray-600">
            <li>About Nike</li>
            <li>Careers</li>
            <li>News</li>
          </ul>
        </div>

        <div>
          <h3 className="font-bold mb-4">Social</h3>
          <ul className="space-y-2 text-gray-600">
            <li>Instagram</li>
            <li>Twitter</li>
            <li>YouTube</li>
          </ul>
        </div>
      </div>

      <div className="text-center text-gray-500 text-sm mt-10">
        © 2026 Nike Clone ReactJS
      </div>
    </footer>
  );
}

export default Footer;
