import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
require("./loader");
require("./shrink_navbar");
import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

Swiper.use([Navigation, Pagination]);
