import { Link } from "react-router-dom";
import { FaSearch, FaShoppingBag, FaHeart, FaUser } from "react-icons/fa";
import { use } from "react";
import { useEffect, useState } from "react";

function Home() {
  const [products, setProducts] = useState(null);

  useEffect(() => {
    fetch("http://localhost:8000/api/products")
      .then((response) => response.json())
      .then((data) => setProducts(data))
      .catch((err) => console.log(err));
  }, []);

  // Contact Form State
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    nomor_tlp: "",
    message: "",
    tanggal: "",
  });

  const [loading, setLoading] = useState(false);

  // handle input
  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  // submit form
  const handleSubmit = async (e) => {
    e.preventDefault();

    setLoading(true);

    try {
      const response = await fetch("http://localhost:8000/api/inbox", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(formData),
      });

      const data = await response.json();

      console.log(data);

      alert("Pesan berhasil dikirim!");

      // reset form
      setFormData({
        name: "",
        email: "",
        nomor_tlp: "",
        message: "",
        tanggal: "",
      });
    } catch (error) {
      console.log(error);
      alert("Terjadi kesalahan!");
    } finally {
      setLoading(false);
    }
  };

  if (!products) return <p>Loading...</p>;

  return (
    <div className="bg-white min-h-screen">
      {/* Hero Section */}
      <section className="relative h-[90vh]">
        <img
          src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1600&auto=format&fit=crop"
          alt="hero"
          className="w-full h-full object-cover"
        />

        <div className="absolute inset-0 bg-black/40 flex items-center">
          <div className="text-white px-8 md:px-20 max-w-2xl">
            <p className="uppercase tracking-[5px] mb-3">New Collection</p>

            <h1 className="text-5xl md:text-7xl font-black leading-tight mb-5">
              JUST DO IT.
            </h1>

            <p className="text-lg mb-8 text-gray-200">
              Discover the newest Nike collection with premium comfort and
              modern style.
            </p>

            <button className="bg-white text-black px-7 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
              Shop Now
            </button>
          </div>
        </div>
      </section>

      {/* Featured Section */}
      <section className="max-w-7xl mx-auto px-6 py-20">
        <div className="flex justify-between items-center mb-10">
          <h2 className="text-3xl font-bold">Featured Products</h2>

          <button className="border px-5 py-2 rounded-full hover:bg-black hover:text-white transition">
            View All
          </button>
        </div>

        {/* Product Grid */}
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          {products?.data?.map((product) => (
            <div key={product.id} className="group">
              {/* Image */}
              <div
                className="overflow-hidden rounded-2xl border border-gray-200"
                style={{
                  backgroundColor: product.background_color || "#ffffff",
                }}
              >
                <img
                  src={product.image}
                  alt={product.name}
                  className="h-80 w-full object-contain group-hover:scale-110 transition duration-500"
                />
              </div>

              {/* Content */}
              <div className="mt-4">
                <h3 className="font-semibold text-lg capitalize">
                  {product.name}
                </h3>

                <p className="text-gray-500 text-sm">{product.description}</p>

                <p className="mt-2 font-bold">
                  Rp. {Number(product.price).toLocaleString()}
                </p>
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* Banner */}
      <section className="bg-black text-white py-20 px-6">
        <div className="max-w-5xl mx-auto text-center">
          <h2 className="text-4xl md:text-6xl font-black mb-6">
            MOVE WITHOUT LIMITS
          </h2>

          <p className="text-gray-300 max-w-2xl mx-auto mb-8">
            Performance meets lifestyle. Explore Nike’s newest innovation
            designed for athletes and everyday wear.
          </p>

          <button className="bg-white text-black px-8 py-3 rounded-full font-semibold hover:bg-gray-200 transition">
            Explore Collection
          </button>
        </div>
      </section>

      {/* comment */}
      <div className="min-h-screen bg-gray-100 flex items-center justify-center px-5 py-10">
        <div className="bg-white w-full max-w-2xl rounded-3xl shadow-xl p-8">
          {/* Title */}
          <div className="mb-8 text-center">
            <h1 className="text-4xl font-bold mb-2">Contact Us</h1>

            <p className="text-gray-500">Send your message to our team</p>
          </div>

          {/* Form */}
          <form onSubmit={handleSubmit} className="space-y-5">
            {/* Name */}
            <div>
              <label className="block mb-2 font-medium">Full Name</label>

              <input
                type="text"
                name="name"
                value={formData.name}
                onChange={handleChange}
                placeholder="Input your name"
                className="w-full border border-gray-300 rounded-xl p-4 outline-none focus:border-black"
                required
              />
            </div>

            {/* Email */}
            <div>
              <label className="block mb-2 font-medium">Email Address</label>

              <input
                type="email"
                name="email"
                value={formData.email}
                onChange={handleChange}
                placeholder="Input your email"
                className="w-full border border-gray-300 rounded-xl p-4 outline-none focus:border-black"
                required
              />
            </div>

            {/* Phone */}
            <div>
              <label className="block mb-2 font-medium">Phone Number</label>

              <input
                type="text"
                name="nomor_tlp"
                value={formData.nomor_tlp}
                onChange={handleChange}
                placeholder="Input phone number"
                className="w-full border border-gray-300 rounded-xl p-4 outline-none focus:border-black"
                required
              />
            </div>

            {/* Date */}
            <div>
              <label className="block mb-2 font-medium">Date</label>

              <input
                type="date"
                name="tanggal"
                value={formData.tanggal}
                onChange={handleChange}
                className="w-full border border-gray-300 rounded-xl p-4 outline-none focus:border-black"
                required
              />
            </div>

            {/* Message */}
            <div>
              <label className="block mb-2 font-medium">Message</label>

              <textarea
                name="message"
                value={formData.message}
                onChange={handleChange}
                rows="5"
                placeholder="Write your message..."
                className="w-full border border-gray-300 rounded-xl p-4 outline-none focus:border-black resize-none"
                required
              ></textarea>
            </div>

            {/* Button */}
            <button
              type="submit"
              disabled={loading}
              className="w-full bg-black text-white py-4 rounded-xl font-semibold hover:bg-gray-800 transition"
            >
              {loading ? "Sending..." : "Send Message"}
            </button>
          </form>
        </div>
      </div>
    </div>
  );
}

export default Home;
