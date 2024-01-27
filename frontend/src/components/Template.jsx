import {useState} from "react";
import SideBar from "./SideBar";
import "../App.css";
import ModalUser from "./ModalUser";
import Header from "./Header";
import {ModalNew} from "./ModalNew";
const logo = "logo.png";
import PropTypes from "prop-types";

const sideBarOptions = [
	{link: "/roles/", icon: "manage_accounts", name: "Roles"},
	{link: "/usuarios/", icon: "co_present", name: "Usuarios"},
	{link: "/bitacoras/", icon: "menu_book", name: "Bitacoras"},
	{link: "/paginas/", icon: "link", name: "Paginas"},
];

function Template({content}) {
	const [showMenu, setShowMenu] = useState(true);
	const [showModal, setShowModal] = useState(false);
	const [showModalNew, setShowModalNew] = useState(false);

	const nombreCompleto = "Kevin Villacreses";
	const email = "kevinvillajim@hotmail.com";
	const avatar = "avatar.png";

	return (
		<>
			<div className={showMenu ? "grid grid-cols-1 md:grid-cols-5" : "flex"}>
				<div
					className={showMenu ? "col-span-1 md:col-span-1 h-screen" : "hidden"}
				>
					<SideBar
						logo={logo}
						options={sideBarOptions}
						name={nombreCompleto}
						email={email}
					/>
				</div>
				<div className={showMenu ? "col-span-1 md:col-span-4" : "w-screen"}>
					<div>
						<Header
							name={nombreCompleto}
							avatar={avatar}
							setShowMenu={setShowMenu}
							setShowModal={setShowModal}
						/>
					</div>
					<div className={showModal ? "inline" : "hidden"}>
						<ModalUser />
					</div>
					<div className="p-[2rem] bg-[#e3e3e3] h-[calc(100%-65px)]">
						<div className="flex justify-between mb-[1rem]">
							<h1 className="text-[30px] font-bold text-gray-800">Roles</h1>
							<button
								onClick={() => {
									setShowModalNew(true);
								}}
								className="bg-[#dba18a] text-white rounded-lg px-[1rem] py-[0.5rem] mr-[7.2rem]"
							>
								Crear Rol
							</button>
						</div>
						<div className="h-[30rem] w-[90%] bg-white rounded-lg p-[1rem] overflow-auto">
							{content}
						</div>
					</div>
				</div>
			</div>
			{showModalNew && (
				<ModalNew
					setShowModalNew={setShowModalNew}
					formObject={[
						{name: "rol", label: "Rol", style: ""},
						{
							name: "usuario_creacion",
							label: "",
							style: "hidden",
							value: localStorage.getItem("id"),
						},
						{
							name: "usuario_modificacion",
							label: "",
							style: "hidden",
							value: localStorage.getItem("id"),
						},
						{
							name: "estado",
							label: "Habilitado",
							style: "",
							value: "1",
						},
					]}
					api="http://127.0.0.1:8000/api/roles"
				/>
			)}
		</>
	);
}

Template.propTypes = {
	content: PropTypes.string.isRequired,
};

export default Template;
