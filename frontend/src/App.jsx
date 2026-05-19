import { BrowserRouter, Routes, Route } from "react-router-dom";
import "./App.css";
import Layouts from "./layouts";
import Home from "./components/pages/home";
import Categories from "./components/pages/categories";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Layouts />}>
          <Route index element={<Home />} />
          <Route path="categories" element={<Categories />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
