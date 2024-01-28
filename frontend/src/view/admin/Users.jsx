import {useState} from "react";
import Template from "../../components/Template";
import DataTable from "../../components/DataTable";
import IconButton from "@mui/material/IconButton";
import all from "../../components/all.js";
import Avatar from "@mui/material/Avatar";
import MoreVertIcon from "@mui/icons-material/MoreVert";
import EditIcon from "@mui/icons-material/Edit";
import DeleteIcon from "@mui/icons-material/Delete";
import CloseIcon from "@mui/icons-material/Close";
import DeleteSweepIcon from "@mui/icons-material/DeleteSweep";

function Users() {
	const [showMore, setShowMore] = useState(false);
	const [selectedRows, setSelectedRows] = useState([]);

	console.log(all);
	const handleShowMore = () => {
		setShowMore(!showMore);
	};

	const handleShowEdit = (id) => () => {
		// Lógica para editar con el ID
		console.log("Edit clicked for ID:", id);
	};

	const handleDelete = (id) => () => {
		// Lógica para eliminar con el ID
		console.log("Delete clicked for ID:", id);
	};

	const handleDeleteSelected = () => {
		console.log("Eliminar filas seleccionadas:", selectedRows);
		// Lógica para borrar las filas seleccionadas
		// Asegúrate de que la lógica aquí está utilizando selectedRows
	};

	const handleSelectionChange = (newSelection) => {
		console.log("Nueva selección en Users:", newSelection);
		setSelectedRows(newSelection); // Asegúrate de que estás actualizando el estado correctamente
	};

	const columns = [
		{field: "id", headerName: "ID", width: 10},
		{field: "name", headerName: "Name", width: 150},
		{field: "email", headerName: "Email", width: 200},
		{
			field: "id_rol",
			headerName: "Rol",
			type: "number",
			width: 10,
		},
		{
			field: "ci",
			headerName: "CI",
			width: 90,
		},
		{
			field: "phone",
			headerName: "Phone",
			type: "number",
			width: 180,
		},
		{
			field: "id_user_created",
			headerName: "Created",
			type: "number",
			width: 80,
		},
		{
			field: "id_user_updated",
			headerName: "Upadated",
			type: "number",
			width: 80,
		},
		{
			field: "avatar",
			headerName: "Avatar",
			width: 90,
			renderCell: (params) => <Avatar alt="Avatar" src={params.value} />,
		},
		{
			field: "actions",
			headerName: "Actions",
			type: "number",
			width: 130,
			renderCell: (params) => (
				<>
					<div className={showMore === true ? "hidden" : "inline"}>
						<IconButton color="black" onClick={handleShowMore}>
							<MoreVertIcon />
						</IconButton>
					</div>
					<div className={showMore === true ? "inline" : "hidden"}>
						<IconButton
							aria-label="fingerprint"
							color="primary"
							onClick={handleShowEdit(params.row.id)}
						>
							<EditIcon />
						</IconButton>
						<IconButton
							aria-label="fingerprint"
							color="error"
							onClick={handleDelete(params.row.id)}
						>
							<DeleteIcon />
						</IconButton>
						<IconButton
							aria-label="fingerprint"
							color="black"
							onClick={handleShowMore}
						>
							<CloseIcon />
						</IconButton>
					</div>
				</>
			),
		},
	];

	const rows = all.users;

	return (
		<>
			<Template
				content={
					<div>
						<div className="mb-4">
							<IconButton
								aria-label="delete-selected"
								color="error"
								onClick={handleDeleteSelected}
							>
								<DeleteSweepIcon />
							</IconButton>
						</div>
						<DataTable
							rows={rows}
							columns={columns}
							selectedRows={selectedRows}
							setSelectedRows={setSelectedRows}
							onSelectionChange={handleSelectionChange}
						/>
					</div>
				}
			/>
		</>
	);
}

export default Users;
