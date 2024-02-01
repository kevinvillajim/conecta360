import {useState} from "react";
import Checkbox from "@mui/material/Checkbox";
import all from "./all.js";

const ToDo = () => {
	const [view, setView] = useState("All");

	const list = ["All", "Active", "Completed", "Calendar"];
	// const active = [];
	// const completed = [];

	const getUserById = function (idU) {
		const filteredUsers = all.users.filter((user) => user.id === idU);
		if (filteredUsers.length > 0) {
			return filteredUsers[0].name;
		} else {
			return "Usuario no encontrado";
		}
	};

	return (
		<>
			<div className="w-[100%] h-[100%]">
				<header>
					<ul className="flex flex-row gap-10 justify-center font-semibold text-[20px]">
						{list.map((item) => (
							<li
								className={`cursor-pointer relative text-black group`}
								onClick={() => setView(item)}
								key={item}
							>
								{item}
								{(view === item || (view === "" && item === "All")) && (
									<div className="absolute w-full h-[2.5px] bg-black bottom-0 left-0"></div>
								)}
								{view !== item && (
									<div className="absolute w-full h-[2.5px] bg-[#93c120] bottom-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity"></div>
								)}
							</li>
						))}
					</ul>
				</header>
				<section className="">
					<div className="flex justify-center">
						<hr className=" mb-[20px] w-[60%]" />
					</div>
					<p>{view}</p>

					<div className="flex flex-wrap gap-3">
						{all.tareas.map((item, index) => (
							<div
								key={index}
								className="w-[15rem] min-h-[15rem] p-[0.8rem] rounded-md shadow-sm shadow-black bg-[white] flex justify-between flex-col"
							>
								<div>
									<div className="flex justify-end">
										<Checkbox defaultChecked={item.done === 1} />
									</div>
									<div className="flex flex-col ">
										<h2
											className={`text-[20px] text-[#93c120] font-bold text-center mb-[1.5rem] ${
												item.done === 1 ? "line-through" : ""
											}`}
										>
											{item.title}
										</h2>
										<p>{item.description}</p>
									</div>
								</div>
								<div className="flex justify-center my-[7%] gap-2">
									<div>
										<h3 className="text-[10px] text-[#13a19b]">Asignado</h3>
										<p className=" border-2 border-[#13a19b] text-[#13a19b] text-[10px] font-semibold px-[3px] py-[2px] rounded-full">
											{getUserById(item.id_user_assigned)}
										</p>
									</div>
									<div>
										<h3 className="text-[10px] text-[#93c120]">Creador</h3>
										<p className="border-2 border-[#93c120] text-[#93c120] text-[10px] font-semibold px-[3px] py-[2px] rounded-full">
											{getUserById(item.id_user_created)}
										</p>
									</div>
								</div>
							</div>
						))}
					</div>
				</section>
			</div>
		</>
	);
};

export default ToDo;
