import {DataGrid} from "@mui/x-data-grid";
import {useRef, useEffect} from "react";

export default function DataTable({
	rows,
	columns,
	setSelectedRows,
	selectedRows,
	onSelectionChange,
}) {
	const selectedRowsRef = useRef([]);

	const handleSelectionChange = (newSelection) => {
		console.log("Nueva selección:", newSelection);
		selectedRowsRef.current = newSelection;
		onSelectionChange(newSelection);
	};

	// Actualiza el estado local cuando cambia el prop `selectedRows`
	useEffect(() => {
		selectedRowsRef.current = selectedRows;
	}, [selectedRows]);

	return (
		<div style={{height: 400, width: "100%"}}>
			<DataGrid
				rows={rows}
				columns={columns}
				initialState={{
					pagination: {
						paginationModel: {page: 0, pageSize: 5},
					},
				}}
				pageSizeOptions={[5, 10]}
				checkboxSelection
				getRowId={(row) => row.id}
				disableRowSelectionOnClick
				selectionModel={selectedRowsRef.current}
				onSelectionModelChange={handleSelectionChange}
			/>
		</div>
	);
}
