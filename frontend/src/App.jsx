import { BrowserRouter, Routes, Route } from "react-router-dom";
import "./App.css";
import Layouts from "./layouts";
import Home from "./components/pages/home";
import Categories from "./components/pages/categories";
import MenPage from "./components/pages/menPage";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Layouts />}>
          <Route index element={<Home />} />
          <Route path="categories" element={<Categories />} />
          <Route path="MenPage" element={<MenPage />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
