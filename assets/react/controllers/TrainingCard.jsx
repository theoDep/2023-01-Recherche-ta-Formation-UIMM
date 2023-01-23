import React from "react";
import Card from "react-bootstrap/Card";

export default ({ training }) => {
  const { name, description, studiesLevel, id } = training;
  return (
    <Card className="cardFormation mx-3 px-0">
      <Card.Header className="w-100 bg-primary text-white">
        Equivalence bac +{studiesLevel}
      </Card.Header>
      <Card.Body>
        <Card.Title>{name}</Card.Title>
        <Card.Text>{description}</Card.Text>
        <Card.Link href={`/training/${id}`}>En savoir plus</Card.Link>
      </Card.Body>
    </Card>
  );
};
