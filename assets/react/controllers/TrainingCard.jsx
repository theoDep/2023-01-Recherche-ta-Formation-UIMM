import React from "react";
import Card from "react-bootstrap/Card";

export default ({ training }) => {
  const { title, description, level } = training;
  return (
    <Card className="cardFormation mx-3 px-0">
      <Card.Header className="w-100 bg-primary text-white">{level}</Card.Header>
      <Card.Body>
        <Card.Title>{title}</Card.Title>
        <Card.Text>{description}</Card.Text>
      </Card.Body>
    </Card>
  );
};
