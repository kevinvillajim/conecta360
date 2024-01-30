import IconButton from "@mui/material/IconButton";
import DeleteIcon from "@mui/icons-material/Delete";

function Card({title, model, provider, img, description}) {
	const key = "hola";
	return (
		<>
			<div className="w-[100%] h-[500px]">
				<h1 className="text-center text-4xl">{title}</h1>
				<h2 className="text-center text-xl">{model}</h2>
				<h3 className="text-center text-l">{provider}</h3>
				<img src={img} alt={`Product - ${key}`} className="w-[100%] h-[100%]" />
				<p className="">{description}</p>
				<div>
					<IconButton aria-label="fingerprint" color="error" onClick="">
						<DeleteIcon />
					</IconButton>
				</div>
			</div>
		</>
	);
}

export default Card;
